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

    $query_id_usuario = "SELECT `NID_USUARIO` from tbl_usuarios as TU where `CUSUARIO` = '$usuario';";
    $call_query_id = mysqli_query($conexion, $query_id_usuario);

    if(!$call_query_id){
        echo '<script>
                alert("Error al ejecutar la consulta.");
                window.location = "../Index.php";
            </script>';
        exit;
    }
    $datosUsuarioTmp = mysqli_fetch_assoc($call_query_id);
        if($datosUsuarioTmp){
            $pnNidUsuario = $datosUsuarioTmp['NID_USUARIO'];
        } else {
            echo '<script>
                    alert("No se encontraron datos para este usuario.");
                    window.location = "../Index.php";
                  </script>';
            exit;
        }
        mysqli_free_result($call_query_id);
            while(mysqli_next_result($conexion)){
                mysqli_store_result($conexion);
            }


    $tituloPublicacion = $_POST['Titulo'];
    $precioPublicacion = $_POST['Precio'];
    $estadoPublicacion = $_POST['Estado'];
    $categoriaPublicacion = $_POST['Categoria'];
    $unidadesPublicacion = $_POST['Unidades'];

    $fotoPublicacion = $_FILES['FotoPublicacion'];

    $fotoPublicacion_nombre = $fotoPublicacion['name'];
    $fotoPublicacion_tmp = $fotoPublicacion['tmp_name'];
    $fotoPublicacion_directorio = $_SERVER['DOCUMENT_ROOT'] .'/Aca_VS/Uploads/Img_publicaciones/';
    $fotoPublicacion_guardada = $fotoPublicacion_directorio . $fotoPublicacion_nombre;

    $descripcionPublicacion = $_POST['Descripcion'];

    if(move_uploaded_file($fotoPublicacion_tmp, $fotoPublicacion_guardada)){

    } else {
        echo "Error al guardar imagen";
    }

    $spd_inserta_publicacion = "call `SPD_INSERTA_PUBLICACION`('$pnNidUsuario', 
                                                                '$categoriaPublicacion',
                                                                '$estadoPublicacion',
                                                                '$tituloPublicacion',
                                                                '$descripcionPublicacion',
                                                                '$precioPublicacion',
                                                                '$unidadesPublicacion',
                                                                '$fotoPublicacion_guardada',
                                                                '$usuario');";

    $call_spd_inserta_publicacion = mysqli_query($conexion, $spd_inserta_publicacion);

    if ($call_spd_inserta_publicacion) {
        echo '<script>
                alert("Datos insertados correctamente.");
                window.location = "/Aca_VS/Views/Perfil_FE.php";
              </script>';
    } else {
        echo '<script>
                alert("Error al insertar los datos: ' . mysqli_error($conexion) . '");
                window.location = "/Aca_VS/Views/Formulario_publicaciones_FE.php";
              </script>';
    }
?>