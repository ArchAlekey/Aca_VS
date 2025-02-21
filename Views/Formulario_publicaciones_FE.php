<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Styles/Estilos-Formularios.css">
    <link rel="stylesheet" href="../Public/Styles/Estilos-inicio.css">
    <link rel="icon" href="../Public/Img/py/favicon-32x32.png" type="image/x-icon">
    <title>Nueva publicación</title>
</head>
<body>
    <?php require'../Public/Templates/cabeceraFormularios_FE.php'?>
    <div class="container__nueva_publicacion">
        <div class="container__nueva_publicacion_form">
            
            <form action="../Controllers/nuevaPublicacionController_BE.php" method="POST" enctype="multipart/form-data">
                <div class="titulos">Completa la información para tu publicación</div>

                <div class="container__input_registro"><input type="text" placeholder="Titulo" name="Titulo" class="input__recuperar" required></div>
                <div class="container__input_registro"><input type="text" placeholder="Precio" name="Precio" class="input__recuperar" required></div>
                <!-- <div class="container__input_registro"><input type="text" placeholder="Estado" name="Estado" class="input__recuperar"></div> -->
                <div class="container__list">
                    <h1 class="encabezado__list_categorias">Estado</h1>
                        <select name="Estado" class="btn__list_categorias" required>
                            <option value="1">Nuevo</option>
                            <option value="2">Usado - Como nuevo</option>
                            <option value="3">Usado - Buen estado</option>
                            <option value="4">Usado</option>
                        </select>
                </div>
                <!-- <div class="container__input_registro"><input type="text" placeholder="Categoría" name="Categoría" class="input__recuperar"></div>A -->
                <div class="container__list">
                    <h1 class="encabezado__list_categorias">Categorías</h1>
                        <select name="Categoria" class="btn__list_categorias" required>
                            <option value="11">Todos</option>
                            <option value="1">Comida</option>
                            <option value="2">Ropa</option>
                            <option value="3">Papelería</option>
                            <option value="4">Libros</option>
                            <option value="5">Juguetes</option>
                            <option value="6">Anime/Manga</option>
                            <option value="7">Electronica</option>
                            <option value="8">Pines</option>
                            <option value="9">Maquillaje</option>
                            <option value="10">Deportes</option>
                        </select>
                </div>
                <div class="container__input_registro"><input type="text" placeholder="Unidades" name="Unidades" class="input__recuperar"></div>
                <div class="container__input_registro"><input type="file" placeholder="Foto" name="FotoPublicacion" class="input__recuperar" accept="image/*"></div>
                <div class="container__input_registro_text_area"><textarea  placeholder="Descripcion(Maximo 300 caracteres)" name="Descripcion" class="input__recuperar_text_area" maxlength="300" required></textarea>
                <button class="btn__formularios">Subir publicación</button>
            </form>
        </div>
    </div>
</body>
</html>