<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("../componentes/head_recetas.php");
            require ("../componentes/info_recetas.php");
        ?>

        <title>
            <?php
                echo "Recetario - " . $sopaCebolla -> palabra1 . " " . $sopaCebolla -> palabra2;
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
                                echo $sopaCebolla -> palabra1;
                            ?>
                    </p>

                    <div id="tituloReceta__linea"></div>
                    <p id="tituloReceta__segundaPalabra">
                        <?php
                            echo $sopaCebolla -> palabra2;
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
                                echo $sopaCebolla -> tiempo_prep;
                            ?>
                        </p>

                        <p><u>Tiempo de cocción</u>:  
                            <?php
                                echo $sopaCebolla -> tiempo_coccion;
                            ?>
                        </p>
                        </div>
                        
                        <p id="encabezadoRecetas">Ingredientes</p>

                        <div id="receta__ingredientes">
                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente1" class="recetas__checkbox">
                                    <label for="ingrediente1" class="receta__checkbox--p"> 42g de manteca</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente2" class="recetas__checkbox">
                                    <label for="ingrediente2" class="receta__checkbox--p"> 1 chorrito de aceite de oliva</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente3" class="recetas__checkbox">
                                    <label for="ingrediente3" class="receta__checkbox--p"> 1.5 kilos de cebollas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> 1.4 litros de caldo de carne</label>
                                </div>
                            </div>

                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 295ml de vino blanco</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente6" class="recetas__checkbox">
                                    <label for="ingrediente6" class="receta__checkbox--p">Queso gruyere en hebras</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> Queso gouda en hebras</label>
                                </div>
                            </div>
                        </div>
                        
                        <p id="encabezadoRecetas">Receta</p>
                        <div id="receta__receta">
                            <ol id="receta__receta--pasos">
                                <li>Calentar la manteca y el aceite de oliva en una sartén a fuego medio, cuando esté bien caliente poner las cebollas cortadas en tiras finas con una pizca de sal.</li>
                                <li>Cocinar las cebollas por 45 minutos o hasta caramelizarlas</li>
                                <li>Verter el vino y el bourbon en la sartén y evaporar el alcohol.</li>
                                <li>Agregar el caldo de carne, tomillo y una pizca de pimienta negra molida.</li>
                                <li>Cocinar la sopa durante 30 minutos.</li>
                                <li>Terminar con el queso en hebras y tostadas.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div id="recursosReceta">
                        <div>
                            <img src="../imagenes/<?php echo $sopaCebolla -> imagenRecetaEscrita?>" alt="Esta es una foto de la receta">
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Notas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Esta es una adaptación de la receta de <cite>Joshua Weissman.</cite> <a href="https://www.youtube.com/watch?v=LIy6Bhg7nH8">Mirá la receta acá.</a> </p>
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