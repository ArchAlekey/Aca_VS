<?php
    session_start();

    include '../Config/conn_BE.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $validacion = mysqli_query($conexion, "SELECT CUSUARIO, CCONTRASEÑA from tbl_usuarios where cusuario = '$usuario' and ccontraseña = '$contraseña'");

    if(mysqli_num_rows($validacion) > 0){
        $_SESSION['Usuario'] = $usuario;
        header("Location: ../Views/Home_FE.php");
        exit;

    } else {
        echo '<script>
                alert("El usuario o la contraseña no son correctos, por favor pruebe con datos validos."); 
                window.location = "../Index.php";
            </script>';
                exit;
    }