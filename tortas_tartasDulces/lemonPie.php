<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("../componentes/head_recetas.php");
            require ("../componentes/info_recetas.php");
        ?>

        <title> 
            <?php
                echo "Recetario - " . $lemonPie -> palabra1 ." " . $lemonPie -> palabra2;
            ?>
        </title>

        <link rel="stylesheet" href="../styles.css">
        
        <link rel = "icon" href = "../imagenes/faviconRecetario.ico">         
    </head>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <body>
        <header>
            <?php 
                require("../componentes/header_recetas.php");
            ?>
        </header>

        <main>
            
            <section id="tituloReceta">
                <div>
                    <p id="tituloReceta__primeraPalabra">
                            <?php
                                echo $lemonPie -> palabra1;
                            ?>
                    </p>

                    <div id="tituloReceta__linea"></div>
                    <p id="tituloReceta__segundaPalabra">
                        <?php
                            echo $lemonPie -> palabra2;
                        ?>
                    </p>
                </div>
            </section>

            <section>
                <div id="ctn__recetaYRecursos">
                    <div id="receta">
                        <div id="receta__info">
                            <p><u>Tiempo de preparación</u>: 
                            <?php
                                echo $lemonPie -> tiempo_prep;
                            ?>
                        </p>

                        <p><u>Tiempo de cocción</u>:  
                            <?php
                                echo $lemonPie -> tiempo_coccion;
                            ?>
                        </p>
                        </div>
                        
                        <p id="encabezadoRecetas">Ingredientes</p>

                        <div id="receta__ingredientes">
                            <div class="receta__ingredientes--checkList">
                                
                                <p id="encabezadoRecetas">Para la masa</p>
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente1" class="recetas__checkbox">
                                    <label for="ingrediente1" class="receta__checkbox--p"> 1 huevo</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente2" class="recetas__checkbox">
                                    <label for="ingrediente2" class="receta__checkbox--p"> 125 g de azúcar</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente3" class="recetas__checkbox">
                                    <label for="ingrediente3" class="receta__checkbox--p"> 250 g de harina</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> 125 g de manteca</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> Una pizca de sal</label>
                                </div>
                            </div>

                            <div class="receta__ingredientes--checkList">
                                
                                <p id="encabezadoRecetas">Para el relleno</p>
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 3 yemas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente6" class="recetas__checkbox">
                                    <label for="ingrediente6" class="receta__checkbox--p"> 75 g de azúcar</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 20 g de maicena</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 500 ml de leche</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> Ralladura y jugo de 1 limón</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 30 g de manteca</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 3 claras</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 9 cucharadas de azúcar</label>
                                </div>
                            </div>
                        </div>
                        
                        <p id="encabezadoRecetas">Receta</p>
                        <div id="receta__receta">
                            <ol id="receta__receta--pasos">
                                <p class="pasosP"><b>Masa</b></p>
                                <li>Batir el huevo con el azúcar y la sal hasta que quede bien cremoso.</li>
                                <li>Agregar la harina de golpe y mezclar bien con una cuchara de madera. Volcar sobre una mesa o tabla, hacer un hueco en el medio, poner la manteca cortada en daditos y amasar.</li>
                                <li>Cuando la masa esté bien homogénea, dejar reposar durante 1/2 hora.</li>
                                <li>Precalentar el horno a temperatura media por 15 minutos.</li>
                                <li>Cumplido este término, estirar y forrar un molde de tarta. Cocer durante 20 minutos.</li>
                                <p class="pasosP"><b>Relleno</b></p>
                                <li>Mezclar dentro de un bol las yemas, el azúcar y la maicena.</li>
                                <li>Agregar la ralladura y el jugo de limón y echar poco a poco la leche hirviente, revolviendo continuamente para que no se corte.</li>
                                <li>Poner sobre fuego mediano hasta que hierva, sin dejar de revolver. Retirar apenas empiece a hervir y agregar la manteca.</li>
                                <li>Aparte, batir las claras a punto de nieve.</li>
                                <li>Cuando estén bien duras, añadir el azúcar en forma de lluvia, siempre sin dejar de batir, hasta que quede bien armado.</li>
                                <li>Aparte, batir las claras a punto de nieve.</li>
                                <li>Retirar la masa del horno, dejar enfriar. Una vez fría rellenar con la crema a temperatura ambiente y decorar por encima con el merengue puesto en una manga de boquilla rizada. Dorar en horno bien caliente.</li>
                                <p class="pasosP"><b>Nota: Para que la masa no se rompa, pues la pasta es muy quebradiza, hay que desmoldarla cuando esté bien fría.</b></p>
                            </ol>
                        </div>
                    </div>
                    
                    <div id="recursosReceta">
                        <div>
                            <img src="../imagenes/RecetaEscrita/<?php echo $lemonPie -> imagenRecetaEscrita?>" alt="Esta es una foto de la receta">
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Notas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Esta receta fue recuperada del <cite>Libro de Cocina del chef Toga</cite>.</p>
                        </div>
                    </div>
                </div>
            </section>

        <?php
            require ("../componentes/pageEnd_footer_recetas.php");
        ?>

    <script src="../javascript.js"></script>
    </body>
</html>