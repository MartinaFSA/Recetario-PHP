<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("../componentes/head_recetas.php");
            require ("../componentes/info_recetas.php");
        ?>

        <title> 
            <?php
                echo "Recetario - " . $pionono -> palabra1 ." " . $pionono -> palabra2;
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
                                echo $pionono -> palabra1;
                            ?>
                    </p>

                    <div id="tituloReceta__linea"></div>
                    <p id="tituloReceta__segundaPalabra">
                        <?php
                            echo $pionono -> palabra2;
                        ?>
                    </p>
                </div>
            </section>

            <section>
                <div id="ctn__recetaYRecursos">
                    <div id="receta">
                        <div id="receta__info">
                            <p><u>Tiempo de preparaci??n</u>: 
                            <?php
                                echo $pionono -> tiempo_prep;
                            ?>
                        </p>

                        <p><u>Tiempo de cocci??n</u>:  
                            <?php
                                echo $pionono -> tiempo_coccion;
                            ?>
                        </p>
                        </div>
                        
                        <p id="encabezadoRecetas">Ingredientes</p>

                        <div id="receta__ingredientes">
                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente1" class="recetas__checkbox">
                                    <label for="ingrediente1" class="receta__checkbox--p"> 4 huevos</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente2" class="recetas__checkbox">
                                    <label for="ingrediente2" class="receta__checkbox--p"> 40g de harina 0000</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente3" class="recetas__checkbox">
                                    <label for="ingrediente3" class="receta__checkbox--p"> 40g de az??car</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> 1 cda de miel</label>
                                </div>
                            </div>

                        </div>
                        
                        <p id="encabezadoRecetas">Receta</p>
                        <div id="receta__receta">
                            <ol id="receta__receta--pasos">
                                <li>Precalentar el horno a temperatura fuerte por 15 minutos (200??C).</li>
                                <li>Batir los huevos, la miel y el az??car con batidora el??ctrica durante 10 minutos o hasta que la mezcla duplique su tama??o, cambie el color y est?? espesa.</li>
                                <li>Incorporar la harina tamizada en 3 partes e integrar en forma envolvente con esp??tula.</li>
                                <li>Verter la preparaci??n en una fuente de horno forrada con papel manteca (podes reemplazarlo por hojas limpias de impresora bien enmantecadas) y cocinar durante 10 minutos.</li>
                                <li>Sacar del horno y enrollar.</li>
                                <p class="pasosP"><b>Ideas para rellenos dulces</b></p>
                                <p class="pasosP">Crema chantilly y fruta cortada en tiras.</p>
                                <p class="pasosP">Dulce de leche repostero y merenguitos.</p>
                                <p class="pasosP"><b>Ideas para rellenos salados</b></p>
                                <p class="pasosP">Jam??n, mayonesa, palmitos, lechuga, morr??n y tomate.</p>
                                <p class="pasosP">Br??coli, queso roquefort, queso crema y tomates deshidratados.</p>
                            </ol>
                        </div>
                    </div>
                    
                    <div id="recursosReceta">
                        <div>
                            <img src="../imagenes/RecetaEscrita/<?php echo $pionono -> imagenRecetaEscrita?>" alt="Esta es una foto de la receta">
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Notas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Esta receta fue recuperada de <cite>Cocineros Argentinos. </cite> <a href="https://www.youtube.com/watch?v=gjK5Kc5SC7Y">Visitala ac?? </a> y segu?? todos sus tips.</p>
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Ideas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Probaste reemplazar una parte de la harina por cacao? O ponerle pur?? de verduras a la masa? </p>
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