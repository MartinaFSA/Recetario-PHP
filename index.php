<?php
    session_start();
    include ('componentes/conexion_constantes_BD.php');
    include ('componentes/component.php');
?>

<!doctype html>
<html lang="es">
<head>
    <?php 
        require("componentes/head.php");
    ?>
    
    <link rel="stylesheet" href="estilos/styles_index.css">

    <title>Recetario - Inicio</title>
    <link rel = "icon" href = "imagenes/faviconRecetario.ico">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<body>
    <?php 
        require_once ("componentes/header.php"); 
    ?>
    <main>
        <!--BARRA DE BÚSQUEDA-->
        <section id="ctn_searchSecc">
            <div class="flexAndCenter">

                <form action="busqueda.php" method="POST" id="searchSecc__form" class="col-auto positionAbsolute">
                    <input name="buscadorSearchSecc" type="text" id="searchSecc__form--input"  class="inputText_Busquedas textoChico inputBlancoSinBorde" placeholder="Buscar">
                    <button name="buscadorSearchSecc__submit" id="searchSecc__form--button" type="submit" class="inputButton_Busquedas textoChico textoBlanco botonVerde">Buscar</button>    
                </form>

                <a href="ingredientes.php" id="searchSecc_searchIngredient" class="textoChico linkVerdeOscuro">
                    Búsqueda por ingrediente
                    <i class="fas fa-chevron-right fa-sm" style="background-color: transparent"></i>
                </a>
            </div>
        </section>

        <!--SECCIÓN RECETAS-->
        <section class="encabezado_section">
            <div class="ctnEncabezado">
                <h1 class="textoTitulos">Mejores Recetas</h1>
            </div>
            <div class="ctnButton">
                <button class="encabezado_section__button"><a href="todas.php" class="encabezadoSection__button--link textoChico">Más recetas</a></button>
            </div>
        </section>

        <!--CARDS-->
        <section class="cnt_recetas">
            <div class="ctn_cards container-fluid">
                <div class="cards__recetas textoChico row">
                    <?php
                        $sentencia = $pdo -> prepare("SELECT * FROM recetas WHERE nombre__receta LIKE 'Sopa de cebolla' OR nombre__receta LIKE 'Suprema Maryland'"); //Traigo 4 recetas de la tabla. OR nombre__receta LIKE 'Suprema Maryland' OR nombre__receta LIKE 'Suprema Maryland'
                        $sentencia -> execute(); //Ejecuto la sentencia de arriba
                        $allRecetas = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

                        foreach($allRecetas as $recetaArray) {
                            //Creo la estructura de la card
                            //El str__replace me permite sacarle los espacios a la recetaname y así obtener un id="" válido en HTML
                    ?>

                        <form action='' method='post' class='card__receta col-sm-12 col-md-6 col-lg-6 col-xl-3'>

                            <input type='text' name='imagenSReceta' id='imagenSReceta' class='imgReceta' alt='Foto del platillo' style="background-image: url('imagenes/<?php echo $recetaArray['imagen__receta']?>')">

                            <a href='<?php echo $recetaArray['link__receta'] ?>'><input type='text' name='recetaSlink' id='recetaSlink' class='card__receta--button botonVerde textoBlanco flexAndCenter textoChico' value='VER RECETA'></a>
                            
                            <input type='hidden' name='recetalink' id='recetalink' value='<?php echo $recetaArray['link__receta'] ?>'>
                            <input type='hidden' name='imagenReceta' id='imagenReceta' value='<?php echo $recetaArray['imagen__receta'] ?>'>

                            <div class='card__receta--info'>
                                <input type='text' name='recetaname' id='recetaname' class="textoChico" value='<?php echo $recetaArray['nombre__receta'] ?>'> 
                                <input type='text' name='recetainfo' id='recetainfo' class="textoChico" value='<?php echo $recetaArray['info__receta']?>'>
                            </div>
                            
                            <button name='botonControlador' value='guardar' type='submit' class='card__receta--buttonGuardarIndex modal__inicieSesion--button botonGuardarNoActive' id='<?php echo str_replace(' ', '', $recetaArray['nombre__receta'])?>'> </button>
                            
                            <input type='hidden' name='receta_id' value='<?php echo $recetaArray['ID']?>'>
                            
                        </form>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <!--MODAL-->
        <?php 
            if(isset($aviso)) { //Si $aviso existe...
                    
                echo "<section class='contenedorDeModales'>
                    <!--Modal receta agregada-->
                    <div class='modalAviso ctn__modalPHP'>
                        <div class='modalPHP'>
                            <p class='textoChico'>" . $aviso . "</p>
                        </div>
                    </div>
                </section>";
            }
        ?>
        
        <script>
            document.getElementById('<?php echo str_replace(' ', '', $recetaArray['nombre__receta'])?>').onclick = function() {
                if (this.classList.contains('botonGuardarNoActive')){
                    this.classList.remove('botonGuardarNoActive');
                }
            }
        </script>
        
        <?php
            include("componentes/pageEnd_footer.php");
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>