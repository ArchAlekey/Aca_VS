<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Public/Img/py/favicon-32x32.png" type="image/x-icon">
        <link rel="stylesheet" href="Public/Styles/Estilos.css">
        <link rel="stylesheet" href="Public/Styles/Estilos-Formularios.css">
        <title>Aca-Vendes</title>
    </head>
    <body>
        <?php include'Public/Templates/cabeceraFormularios_FE.php'?>
        <div class="container__login" > <!-- Contenedor del formulario completo -->

            <div class="container__login_form">
                <form action="Controllers/loginController.php" method="POST">
                    <img src="Public/Img/Aca-Vendes.png" alt="" id="Logo">
                        <div class="container__input">
                            <input type="text" placeholder="Número de cuenta" class="container__input_styles" name="usuario" required>
                        </div>
                        <div class="container__input">
                            <input type="password" placeholder="Contraseña" class="container__input_styles" name="contraseña" required>
                        </div>
                        <div class="container__btn_login">
                            <button class="boton">Iniciar Sesion</button>
                        </div>
                </form>
            </div>

            <div class="container__recuperar_contraseña">
                <h2 class="btn__recuperar_contraseña">
                    <a href="Views/Formulario_contraseña_FE.php">¿Olvidó su contraseña?</a>
                </h2>
            </div>
                    
            <div class="container__nuevo_registro">
                <form action="Views/Formulario_registro_FE.php">
                    <div id="container__btn_nuevo_registro">
                        <button type="submit" class="boton">Unirse</button></div>
                </form>
            </div>
        </div>
        
            <!--Footer -->
 <!--        <footer class="styles__footer">
            Version 1.0
            <br>
            Phytones 2024 &reg;
        </footer> -->

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