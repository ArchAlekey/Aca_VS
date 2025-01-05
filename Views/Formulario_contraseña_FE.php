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
    <div class="container__recuperar_contraseña">
        <div class="container__formulario_contraseña"> 
            <form action="" method="get">
                
                    <h1 class="titulos"">Recupera tu contraseña</h1>
                    
                    <h2 class="titulos">Ingresa tu correo electrónico o número de celular para buscar tu cuenta.</h2>
                   
                    <div class="container__input_registro">
                        <input type="text" placeholder="Correo electrónico o número de celular" class="input__recuperar">
                    </div>
                    
                    <button class="btn__formularios">Buscar</button>
                
            </form>
        </div>
    </div>
<!--     <footer id="pie-pag">
        Version 1.0
        <br>
        Phytones 2024 &reg;
    </footer> -->
    
    <script src="App/main.js"></script>
</body>
</html>