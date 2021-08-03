<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("../componentes/head_recetas.php");
            require ("../componentes/info_recetas.php");
        ?>

        <title>
            <?php
                echo "Recetario - " . $papaRellena -> palabra1 . " " . $papaRellena -> palabra2;
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
                            echo $papaRellena -> palabra1;
                        ?>
                    </p>

                    <div id="tituloReceta__linea"></div>
                    <p id="tituloReceta__segundaPalabra">
                        <?php
                            echo $papaRellena -> palabra2;
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
                                echo $papaRellena -> tiempo_prep;
                            ?>
                        </p>

                        <p><u>Tiempo de cocción</u>:  
                            <?php
                                echo $papaRellena -> tiempo_coccion;
                            ?>
                        </p>
                        </div>
                        
                        <p id="encabezadoRecetas">Ingredientes</p>

                        <div id="receta__ingredientes">
                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente1" class="recetas__checkbox">
                                    <label for="ingrediente1" class="receta__checkbox--p"> 4 papas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente2" class="recetas__checkbox">
                                    <label for="ingrediente2" class="receta__checkbox--p"> 100 g de queso crema</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente3" class="recetas__checkbox">
                                    <label for="ingrediente3" class="receta__checkbox--p"> 1 brócoli</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> 250 ml de leche</label>
                                </div>
                            </div>

                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 2 cucharadas de maicena</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente6" class="recetas__checkbox">
                                    <label for="ingrediente6" class="receta__checkbox--p"> 1 cebolla</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 1 diente de ajo</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente8" class="recetas__checkbox">
                                    <label for="ingrediente8" class="receta__checkbox--p"> Un puñado de queso en hebras</label>
                                </div>
                            </div>
                        </div>
                        
                        <p id="encabezadoRecetas">Receta</p>
                        <div id="receta__receta">
                            <ol id="receta__receta--pasos">
                                <li>Lavar bien las papas y pincharlas con un tenedor. Hornearlas a fuego bajo durante 40 minutos o hasta que estén bien cocidas.</li>
                                <li>Cortar la parte superior de las papas y ahuecarlas con una cuchara.</li>
                                <li>Cortar el brócoli en ramos chicos  y hervir durante 15 minutos.</li>
                                <li>En una sartén poner una cucharada de manteca (puede reemplazarse por aceite), cuando esté bien caliente poner la maicena y cocinarla hasta que esté dorada.</li>
                                <li>Cuando la maicena cambie de color verter la leche caliente y mezclar con batidor de alambre sin parar. Agregar una pizca de sal, nuez moscada y pimienta negra molida. Cuando la salsa bechamel rompa hervor retirar del fuego.</li>
                                <li>Saltear la cebolla picada fina y el ajo.</li>
                                <li>En un bowl combinar el brócoli, el queso crema, el interior de las papas, la salsa blanca, la cebolla y el ajo y el queso en hebras.</li>
                                <li>Rellenar las mitades de papa ahuecadas con la mezcla y llevar a horno bajo hasta que se derrita el queso.</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div id="recursosReceta">
                        <div>
                            <img src="../imagenes/<?php echo $papaRellena -> imagenRecetaEscrita ?>" alt="Esta es una foto de la receta">
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Ideas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Adapta esta receta a los ingredientes que tengas disponibles. <br>Probá cambiar el brócoli por choclo o agregale pedacitos de panceta!</p>
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