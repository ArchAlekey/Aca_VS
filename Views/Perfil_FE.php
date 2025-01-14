<?php
session_start();
include '../Config/conn_BE.php'; // Conexión a la base de datos

        if (!isset($_SESSION['Usuario'])) {
            echo '<script>
                    alert("Debes iniciar sesión para acceder a esta página.");
                    window.location = "../Index.php";
                </script>';
            exit;
        }

        $usuario = $_SESSION['Usuario'];

        $spd_consulta_datos_perfil = "Call `SPD_CONSULTA_DATOS_PERFIL` ('$usuario');";
        $call_spd_consulta_datos_perfil = mysqli_query($conexion, $spd_consulta_datos_perfil);

        if (!$call_spd_consulta_datos_perfil) {
            echo '<script>
                    alert("Error al ejecutar la consulta.");
                    window.location = "../Index.php";
                </script>';
            exit;
        }

        $datosUsuario = mysqli_fetch_assoc($call_spd_consulta_datos_perfil);
            if($datosUsuario){
                $nombreUsuario = $datosUsuario['Nombre'];
                $rutaFotoPerfil = $datosUsuario['Ruta'];
            } else {
                echo '<script>
                        alert("No se encontraron datos para este usuario.");
                        window.location = "../Index.php";
                      </script>';
                exit;
            }
            mysqli_free_result($call_spd_consulta_datos_perfil);
                while(mysqli_next_result($conexion)){
                    mysqli_store_result($conexion);
                }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-Perfil.css">
    <link rel="stylesheet" href="../Public/Styles/Estilos-inicio.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil</title>
</head>
<body>
    <?php require'../Public/Templates/cabeceraHome_FE.php'?>

    <div class="container__perfil">
        <div class="container__foto_perfil">
            <img src="<?php echo htmlspecialchars($rutaFotoPerfil); ?>" alt="">
        </div>
        <div class="container__info_contacto">
            <h1 class="titulos"><?php echo htmlspecialchars($nombreUsuario); ?></h1>
        </div>
        <div class="container__btns">
            <div class="container__btn_publicaciones">
                <a href="../Models/consultaPublicacionesUsuario_BE.php"><div class="btn__publicaiones"><i class="fa-solid fa-shop"></i></div></a>
            </div>
            <div class="container__btn_nueva_publicacion">
                <a href="Formulario_publicaciones_FE.php"><div class="btn__nueva_publicacion"><i class="fa-solid fa-plus"></i></div></a>
            </div>
            <div class="container__btn_contacto">
                <div class="btn__contacto"><i class="fa-brands fa-whatsapp"></i></div>
            </div>
        </div>
    </div>

</body>
</html>

