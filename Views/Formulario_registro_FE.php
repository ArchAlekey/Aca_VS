<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-Formularios.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    <title>Registro</title>
</head>
<body>
    <?php require'../Public/Templates/cabeceraFormularios_FE.php'?>
    
    <div class="container__nuevo_registro_form">
        <div class="container__formulario_registro">
            <form action="../Controllers/nuevoUsuarioController.php" method="POST">
                    <h1 class="titulos">Ingresa tus datos</h1>
                    <input type="text" placeholder="Nombre" name="Nombre" required class="container__input_registro">
                    <input type="text" placeholder="Apellido paterno" name="Apellido_Paterno" required class="container__input_registro">
                    <input type="text" placeholder="Apellido materno" name="Apellido_Materno" required class="container__input_registro">
                    <input type="text" placeholder="Correo electronico" name="Correo" required class="container__input_registro">
                    <input type="text" placeholder="Numero celular" name="Celular" class="container__input_registro">
                    <input type="text" placeholder="Numero de cuenta" name="Numero_Cuenta" required class="container__input_registro">
                    <input type="text" placeholder="Contraseña" name="Contraseña" required class="container__input_registro">
                    <br>
                    <button class="btn__formularios">Registrarte</button>
            </form>
        </div>
    </div>
    
</body>
</html>