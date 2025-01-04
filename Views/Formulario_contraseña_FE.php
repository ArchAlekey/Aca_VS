<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-Formularios.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    
    <title>¿Olvido su contraseña?</title>
</head>
<body>
    <?php include'../Public/Templates/cabeceraFormularios_FE.php'?>
    <div id="box_content">
        <form action="" method="get">
            <div id="box-1"> 
                <h1 id="T1">Recupera tu contraseña</h1>
                
                <h2 id="T2">Ingresa tu correo electrónico o número de celular para buscar tu cuenta.</h2>
                <input type="text" placeholder="Correo electrónico o número de celular" id="Correo-celular">
                
                <button id="buscar">Buscar</button>
            </div>
        </form>
    </div>
    <footer id="pie-pag">
        Version 1.0
        <br>
        Phytones 2024 &reg;
    </footer>
    
    <script src="App/main.js"></script>
</body>
</html>