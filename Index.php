<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Public/Img/py/favicon-32x32.png" type="image/x-icon">
        <link rel="stylesheet" href="Public/Styles/Estilos.css">
        <title>Aca-Vendes</title>
    </head>
    <body>
    <?php require'Public/Templates/cabeceraFormularios_FE.php'; ?>


        <div id="box">
            <div id="caja-caja">
                <form action="Controllers/loginController.php" method="POST" id="loginform">
                <img src="Public/Img/Aca-Vendes 2.0.png" alt="" id="Logo">

                <div class="Caja"><input type="text" placeholder="Usuario" id="Caja_user" name="usuario" require></div>
                <div class="Caja"><input type="password" placeholder="Contraseña" id="Caja_pass" name="contraseña" required></div>
                <div id="Caja-login"><button class="boton-login">Iniciar Sesion</button></div>
                </form>
                <div id="recuperar-pass"><h2 id="rec-pass"><a href="Views/Formulario_contraseña_FE.php">¿Olvidó su contraseña?</a></h2></div>
                <hr>
                <form action="Views/Formulario_registro_FE.php">
                    <div id="Caja-registro"><button type="submit" class="boton-login">Unirse</button></div>
                </form>

            </div>
        </div>
            <!--Footer -->
            <div id="caja-pie-login">
                <footer id="pie-login">
                    Version 1.0
                    <br>
                    Phytones 2024 &reg;
                </footer>

                <?php include'Config/conn_BE.php'; ?>
    
                <script src="Vistas/App/main.js"></script>
        
    </body>
    </html>

    <?php
    session_start();

    if(isset($_SESSION['Usuario'])){
        header("Location: Views/Home_FE.php");
    }
    ?>