<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-Perfil.css">
    <link rel="stylesheet" href="../Public/Styles/Estilos-inicio.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil</title>
</head>
<body>
    <?php require'../Public/Templates/cabeceraHome_FE.php'?>

    <div class="container__perfil">
        <div class="container__foto_perfil">
            <img src="../Public/Img/blank-perfil.png" alt="">
        </div>
        <div class="container__info_contacto">
            <h1 class="titulos">Nombre</h1>
        </div>
        <div class="container__btns">
            <div class="container__btn_publicaciones">
                <div class="btn__publicaiones"><i class="fa-solid fa-shop"></i></div>
            </div>
            <div class="container__btn_nueva_publicacion">
                <a href="Formulario_publicaciones_FE.php"><div class="btn__nueva_publicacion"><i class="fa-solid fa-plus"></i></div></a>
            </div>
            <div class="container__btn_contacto">
                <div class="btn__contacto"><i class="fa-brands fa-whatsapp"></i></div>
            </div>
        </div>
    </div>
</body>
</html>