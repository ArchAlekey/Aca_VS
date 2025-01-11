    <?php
        session_start();
            if(!isset($_SESSION['Usuario'])){
                echo '  <script>
                            alert("Inicia sesión primero");
                            window.location = "../Index.php";
                        </script>';
                    session_destroy();
                    die();
            }
            /* session_destroy(); */
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-inicio.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Inicio</title>
</head>
<body>
    <?php include'../Public/Templates/cabeceraHome_FE.php';?>
    <div class="nav__bar_filtros"> <!-- Contenedor para la barra de filtros -->

<div class="container__list">
    <h1 class="encabezado__list_categorias">Categorías</h1>
        <select name="" class="btn__list_categorias">
            <option value="C1">Todos</option>
            <option value="C2">Comida</option>
            <option value="C3">Ropa</option>
            <option value="C4">Papelería</option>
            <option value="C5">Libros</option>
            <option value="C6">Juguetes</option>
            <option value="C7">Anime/Manga</option>
            <option value="C8">Electronica</option>
            <option value="C9">Pines</option>
            <option value="C10">Maquillaje</option>
            <option value="C11">Deportes</option>
        </select>
</div>

<div class="container__list">
    <h1 class="encabezado__list_categorias">Ordenar por</h1>
        <select name="" class="btn__list_categorias">
            <option value="C1">Más recientes</option>
            <option value="C2">Más antiguos</option>
            <option value="C3">Más populares</option>
            <option value="C4">Precio más alto</option>
            <option value="C5">Precio mas bajo</option>
        </select>
</div>

<div class="container__list">
    <h1 class="encabezado__list_categorias">Estado</h1>
        <select name="" class="btn__list_categorias">
            <option value="C1">Nuevo</option>
            <option value="C2">Usado - Como nuevo</option>
            <option value="C3">Usado - Buen estado</option>
            <option value="C4">Usado - Aceptable</option>
        </select>
</div>

<div class="container__list">
    <h1 class="encabezado__list_categorias">Fecha de publicación</h1>
        <select name="" class="btn__list_categorias">
            <option value="C1">Todas</option>
            <option value="C2">Ultimas 24 horas</option>
            <option value="C3">Ultimos 7 días</option>
            <option value="C4">Ultimos 30 días</option>
        </select>
</div>
</div>

<div class="nav__bar_opciones"> <!-- Contenedor para la barra de configuraciónes -->
    <div class="container__cierre_sesion">
        <a href="../Controllers/loginControllerCloseSession_BE.php" class="btn__cierre_sesion">Cerrar sesión</a>
    </div>
</div>

<!-- Publicaciones -->
    <div class="container__publicaciones">
        <div class="container__publicacion_individual">
            <div class="card__info_publicacion">
                <ul class="atributos__publicacion">
                    <li>Nombre Producto</li>
                    <li>Descripción</li>
                    <li>Precio</li>
                    <li>Estado</li>
                    <li>Unidades</li>
                </ul>
                <ul class="atributos__vendedor">
                    <li>Nombre Persona</li>
                    <li>Celular</li>
                </ul>
            </div>
            <div class="card__img_publicacion">
                <img src="../Public/Img/blank-perfil.png" alt="">
            </div>
        </div>
    </div>
    
    <script src="../Public/App/main.js"></script> 
</body>
</html>