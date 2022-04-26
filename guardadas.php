<?php
    session_start();
    include ("componentes/conexion_constantes_BD.php");
    include ("componentes/component.php");
?>

<!doctype html>
<html lang="es">
    <head>
        <?php 
            require ("componentes/head.php");
        ?>

        <title>Recetario - Recetas guardadas</title>
        <link rel = "icon" href = "imagenes/faviconRecetario.ico">
    </head>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <body>
        <?php
            require_once ('componentes/header.php');
        ?>

        <main> 
            <!--SECCIÓN RECETAS-->
            <section class="encabezado_section">
                <div class="ctnEncabezado">
                    <h1 class="textoTitulos">Recetas Guardadas</h1>
                </div>

                <div class="ctnButton">
                    <button class="encabezado_section__button"><a href="todas.php" class="encabezadoSection__button--link textoChico">Más recetas</a></button>
                </div>
            </section>
            
            <!--CARDS-->
            <section class="cnt_recetas">
                <div class="ctn_cards container-fluid">
                    <div class="cards__recetas row">
                        <?php
                            if(isset($_SESSION['mail'])) {
                                if (!empty($_SESSION['recetasGuardadas'])) {                                
                                    foreach ($_SESSION['recetasGuardadas'] as $indice => $recetaArray){
                        ?>
                            <div action='' class='card__receta col-sm-12 col-md-6 col-lg-6 col-xl-3'>
                            
                                <img src='imagenes/CardsRecetas/<?php echo $recetaArray['ImagenReceta'] ?>' alt='Foto del platillo' width='300px' height='250px' class='card__receta--img'>

                                <a href='<?php echo $recetaArray['LinkReceta']?>'> 
                                    <div class='card__receta--button botonVerde textoBlanco flexAndCenter textoChico'> 
                                        <p>VER RECETA</p>
                                    </div>
                                </a>

                                <form action='' method='post'>
                                    <input type='hidden' name='receta_id' id="receta_id" value='<?php echo $recetaArray['ID']?>'>
                                    <button name='botonControlador' value='eliminar' type='submit' class='card__receta--buttonGuardar modal__inicieSesion--button' id='<?php echo str_replace(' ', '', $recetaArray['NombreReceta'])?>'> </button>
                                </form>

                                <div class='card__receta--info'>
                                    <p> <?php echo $recetaArray['NombreReceta']?> </p> 
                                    <p> <?php echo $recetaArray['InfoReceta']?> </p>
                                </div>                                
                            </div>

                            <script>
                                document.getElementById('<?php echo str_replace(' ', '', $recetaArray['NombreReceta'])?>').onclick = function() {
                                    if (!this.classList.contains('botonGuardarNoActive')){
                                        this.classList.add('botonGuardarNoActive');
                                    }
                                }
                            </script>

                        <?php
                                    } 
                                }else {
                                    echo "
                                    <section class='ctn__blobGuardadas'>
                                        <img class='ctn__blobGuardadas--imgFondo' src='imagenes/SVG/blob3.svg' alt=''>
                                        
                                        <div class='blobGuardadas'> 
                                            <p>Aún no ha guardado recetas.</p>
                                            <p>Para guardar recetas presione el corazón verde.</p>
                                            <img src='imagenes/SVG/guardado.svg' alt='Botón para guardar recetas' style='width: 10vw;'>
                                        </div>

                                    </section>
                                    ";
                                }
                        ?>
                        
                        <?php
                            }else {
                                echo "
                                    <section class='ctn__blobGuardadas'>
                                        <img class='ctn__blobGuardadas--imgFondo' src='imagenes/SVG/blob3.svg' alt=''>
                                        
                                        <div class='blobGuardadas'> 
                                            <p>Inicie sesión para</p>
                                            <p>ver sus recetas guardadas.</p>
                                        </div>

                                    </section>
                                ";
                            }
                        ?>
                    </div>
                    <style>
                        .ctn__blobGuardadas {
                            position: relative;

                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .ctn__blobGuardadas--imgFondo {
                            width: 100%; 
                            height: 100%;

                            position: absolute;
                            z-index: -3;
                        }

                        .blobGuardadas {
                            text-align: center;
                        }

                        .blobGuardadas p {
                            color: #405b48;
                            font: calc(16px + 0.7vw) 'Karma', serif;
                            letter-spacing: 1px;
                        }

                        @media (max-width: 850px) {
                            
                            .ctn__blobGuardadas {
                                width: 90vw;
                                height: 90vw;
                            }
                        }

                        @media (min-width: 850px) {
                            
                            .ctn__blobGuardadas {
                                width: 40vw;
                                height: 40vw;
                            }
                        }
                    </style>
                </div>
            </section>
        
            
            <!--MODAL-->
            <?php 
                if(isset($aviso)) { //Si $aviso existe...
                        
                    echo "<section class='contenedorDeModales'>
                        <!--Modal receta agregada-->
                        <div class='modalAviso' class='ctn__modalPHP'>
                            <div class='modalPHP'>
                                <p>" . $aviso . "</p>
                            </div>
                        </div>

                    </section>";
                }
            ?>
        </main>

        <?php
            include("componentes/pageEnd_footer.php");
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
</html>
