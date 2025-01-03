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

<!--     <div id="cabecera">
        <a href="">
            <img src="Recursos visuales/Aca-Vendes 2.0.png" id="Logo">
        </a>
    </div> -->
    <?php require('../Public/Templates/Cabecera_FE.php') ?>
    <div id="box_content">
        <form action="" method="get">
            <div id="box-2">
                <h1 id="T1">Ingresa tus datos</h1>
                <input type="text" placeholder="Nombre" required class="Form_regis">
                <input type="text" placeholder="Apellido paterno" required class="Form_regis">
                <input type="text" placeholder="Apellido materno" required class="Form_regis">
                <input type="text" placeholder="Correo electronico" required class="Form_regis">
                <input type="text" placeholder="Numero de cuenta" required class="Form_regis">
                <input type="text" placeholder="Numero celular" class="Form_regis">
                <br>
                
                <button id="Registrarte">Registrarte</button>
            </div> 
        </form>
    </div>
    <footer id="pie-pag">
        Version 1.0
        <br>
        Phytones 2024 &reg;
    </footer>
    
</body>
</html>