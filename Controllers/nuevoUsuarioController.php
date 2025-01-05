<?php

    include '../Config/conn_BE.php';

    $nombre = $_POST['Nombre'];
    $ap_paterno = $_POST['Apellido_Paterno'];
    $ap_materno = $_POST['Apellido_Materno'];
    $correo = $_POST['Correo'];
    $celular = $_POST['Celular'];
    $nu_cuenta = $_POST['Numero_Cuenta'];
    $contraseña = $_POST['Contraseña'];

    $spd_inserta = "CALL `SPD_INSERTA_PERSONA_USUARIO`('$nombre', '$ap_paterno', '$ap_materno', '$correo', '$celular', '$nu_cuenta', '$contraseña');";
   /*  $inserta_persona = mysqli_query($conexion, "    INSERT INTO tbl_personas(`CNOMBRE`, `CAPELLIDO_PATERNO`, `CAPELLIDO_MATERNO`, `CCORREO`, `CNUMERO_CELUAR`, `CNUMERO_CUENTA`, `BHABILITADO`, `DFECHA_ALTA`)
                                                    VALUES('$nombre', '$ap_paterno', '$ap_materno', '$correo', '$celular', '$nu_cuenta', 1, NOW());"); */
    $call_spd = mysqli_query($conexion, $spd_inserta);

if ($call_spd) {
    echo '<script>
            alert("Datos insertados correctamente.");
            window.location = "../Index.php";
          </script>';
} else {
    echo '<script>
            alert("Error al insertar los datos: ' . mysqli_error($conexion) . '");
            window.location = "Formularios_registro_FE.php";
          </script>';
}