<?php
    include '../Config/conn_BE.php';
    session_start();

    if (!isset($_SESSION['Usuario'])) {
        echo '<script>
                alert("Debes iniciar sesión para acceder a esta página.");
                window.location = "../Index.php";
            </script>';
        exit;
    }

    $usuario = $_SESSION['Usuario'];

    $spd_consulta_publicaciones_usuario = "CALL SPD_CONSULTA_PUBLICACIONES_USUARIO('$usuario');";
    $call_spd_consulta_publicaciones_usuario = mysqli_query($conexion, $spd_consulta_publicaciones_usuario);

    if (!$call_spd_consulta_publicaciones_usuario) {
        echo '<script>
                alert("Error al ejecutar la consulta.");
                window.location = "../Index.php";
            </script>';
        exit;
    }
    include '../Public/Templates/cabeceraHome_FE.php';
    // Verifica si hay resultados y genera dinámicamente el contenido
    if (mysqli_num_rows($call_spd_consulta_publicaciones_usuario) > 0) {
        while($datosPublicacion = mysqli_fetch_assoc($call_spd_consulta_publicaciones_usuario)) {
            $nombreProducto = $datosPublicacion['Nombre_Producto'];
            $descripcionProducto = $datosPublicacion['Descripcion'];
            $precioProducto = $datosPublicacion['Precio'];
            $estadoProducto = $datosPublicacion['Estado'];
            $categoriaProducto = $datosPublicacion['Categoría'];
            $unidadesProducto = $datosPublicacion['Unidades'];
            $rutaImagenProducto = $datosPublicacion['Ruta'];
            $nombreUsuarioPublica = $datosPublicacion['Nombre_Usuario'];
            $celularUsuarioPublica = $datosPublicacion['Celular'];

            echo '
            <div class="container__publicaciones">
                <div class="container__publicacion_individual">
                    <div class="card__info_publicacion">
                        <ul class="atributos__publicacion">
                            <li>Nombre Producto: '.htmlspecialchars($nombreProducto).'</li>
                            <li>Descripción: '.htmlspecialchars($descripcionProducto).'</li>
                            <li>$'.htmlspecialchars($precioProducto).'</li>
                            <li>Estado: '.htmlspecialchars($estadoProducto).'</li>
                            <li>Categoría: '.htmlspecialchars($categoriaProducto).'</li>
                            <li>Unidades disponibles: '.htmlspecialchars($unidadesProducto).'</li>
                        </ul>
                        <ul class="atributos__vendedor">
                            <li>Vendedor: '.htmlspecialchars($nombreUsuarioPublica).'</li>
                            <li>Contacto: '.htmlspecialchars($celularUsuarioPublica).'</li>
                        </ul>
                    </div>
                    <div class="card__img_publicacion">
                        <img src="'.htmlspecialchars($rutaImagenProducto).'" alt="">
                    </div>
                </div>
            </div>';
        }
    } else {
        echo '<script>
                alert("No se encontraron datos para este usuario.");
                window.location = "../Index.php";
              </script>';
    }

    mysqli_free_result($call_spd_consulta_publicaciones_usuario);

    while(mysqli_next_result($conexion)){
        mysqli_store_result($conexion);
    }
?>
<link rel="stylesheet" href="../Public/Styles/Estilos-inicio.css">
