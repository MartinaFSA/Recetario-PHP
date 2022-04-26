<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("../componentes/head_recetas.php");
            require ("../componentes/info_recetas.php");
        ?>

        <title>
            <?php
                echo "Recetario - " . $milanesaMaryland -> palabra1 . " " . $milanesaMaryland -> palabra2;
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
                                echo $milanesaMaryland -> palabra1;
                            ?>
                    </p>

                    <div id="tituloReceta__linea"></div>
                    <p id="tituloReceta__segundaPalabra">
                        <?php
                            echo $milanesaMaryland -> palabra2;
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
                                echo $milanesaMaryland -> tiempo_prep;
                            ?>
                        </p>

                        <p><u>Tiempo de cocción</u>:  
                            <?php
                                echo $milanesaMaryland -> tiempo_coccion;
                            ?>
                        </p>
                        </div>
                        
                        <p id="encabezadoRecetas">Ingredientes</p>

                        <div id="receta__ingredientes">
                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente1" class="recetas__checkbox">
                                    <label for="ingrediente1" class="receta__checkbox--p"> 4 milanesas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente2" class="recetas__checkbox">
                                    <label for="ingrediente2" class="receta__checkbox--p"> 1 kilo de papas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente3" class="recetas__checkbox">
                                    <label for="ingrediente3" class="receta__checkbox--p"> 3 choclos</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente4" class="recetas__checkbox">
                                    <label for="ingrediente4" class="receta__checkbox--p"> 200 ml de leche</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente8" class="recetas__checkbox">
                                    <label for="ingrediente8" class="receta__checkbox--p"> 1 lata de arvejas</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 1 huevo</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> Aceite para freír</label>
                                </div>
                            </div>

                            <div class="receta__ingredientes--checkList">
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 3 cdas de harina</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente6" class="recetas__checkbox">
                                    <label for="ingrediente6" class="receta__checkbox--p"> Aceite para freír c/n</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente7" class="recetas__checkbox">
                                    <label for="ingrediente7" class="receta__checkbox--p"> 1/2 morrón</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente8" class="recetas__checkbox">
                                    <label for="ingrediente8" class="receta__checkbox--p"> 8 fetas de jamón</label>
                                </div>
                                
                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> 1 banana</label>
                                </div>

                                <div class="ctn__checkboxes">
                                    <input type="checkbox" name="" id="ingrediente5" class="recetas__checkbox">
                                    <label for="ingrediente5" class="receta__checkbox--p"> Pan rallado</label>
                                </div>
                                
                            </div>
                        </div>
                        
                        <p id="encabezadoRecetas">Receta</p>
                        <div id="receta__receta">
                            <ol id="receta__receta--pasos">
                                <li>Blablablabla blablablabl blavlalblalbv blblablb bla lb lb a</li>
                                <li>Blablablabla blabl blavlalblalbv blblablb bla lb lb ab lab alba lbalbabl lblalbl alb</li>
                                <li>Blablablabla blablablabl blavlalblalbv blblablb l lblalbl alb</li>
                                <li>Blablablabla blablablabl blavlalbblablbla lb lb ab lab alba lbalbabl lblalbl alb</li>
                                <li>Bblabla blablablabl blavlalbblablbla lb lb ab lab alba lbalbabl lblalbl al</li>
                                <li>Blabla blablablabl blavlalbblablbla lb lb ab lab alba lbalbabl lblalbl al</li>
                                <li>Bblabla blablablabl blavlalbblablbla lb lb ab lab alba lbalbabl lblalbl al</li>
                                <li>Bblabla blabblablbla lb lb ab lab alba lbalbabl lblalbl al</li>
                                <li>Bblabla blablablabl blavlalbblablbla lb  alba lbalbabl lblalbl al</li>
                                <li>Bblabla blablablabl blavlalbblablbla lb lb ab lab  al</li>
                            </ol>


                                <!--


z
Preparación:
                                    1. Cortamos la pechuga de manera que nos quede más fina y amplia (el corte lo hacemos del centro hacia los costados sin llegar hasta el final de la superficie).
                                    2. Colocamos 1 huevo, ajo, perejil, sal y pimienta en un recipiente y batimos hasta integrar. Pasamos la suprema por harina, luego por esta mezcla y posteriormente por panko. Lo ideal es pasarla dos veces, así queda más crocante cuando la freímos. Ni bien esté lista, la llevamos a la heladera por 30 minutos.
                                    3. Para la salsa, colocamos un poco de aceite y la cucharada de manteca, la cebolla picada y dejamos rehogar. Cuando transparenta agregamos las 2 cucharadas de harina y revolvemos hasta que se integre todo. Sumamos la leche y luego el choclo desgranado. Salpimentamos a gusto, ponemos un poquito de nuez moscada y dejamos cocinar dos minutos. Apagamos el fuego y reservamos.
                                    4. Colocamos en otro recipiente 1 huevo, 1 cucharada sopera de harina y mezclamos hasta lograr una mezcla cremosa e integrada. Pelamos y cortamos la banana en 3, la pasamos por esta mezcla y freímos en abundante aceite. Retiramos y dejamos escurrir en papel absorbente.
                                    5. Pelamos y cortamos las papas en finas láminas y luego en finos bastoncitos tipo papas pay. Freímos en abundante aceite y reservamos.
                                    6. Freímos la suprema en abundante aceite por entre 4 y 6 minutos por lado o hasta que se vea dorada.
                                    7. Servimos la suprema, por encima colocamos la banana frita, en un costado las papas pay y en un recipiente la salsa
                                
                                    Pasar las supremas por harina, luego por los huevos batidos y, por último, por el pan rallado.

Paso 4

Freírlas en abundante aceite caliente hasta que estén doradas. Escurrirlas sobre papel absorbente.

Paso 5

La salsa bechamel. Calentar la leche y el caldo en una cacerola, hasta que rompa el hervor. En otra cacerola, derretir 25 gramos de manteca junto con la harina y cocinar 3 minutos, revolviendo constantemente. Incorporar la leche caliente, sin dejar de revolver. Cocinar hasta que espese y retirar.

Paso 6

La crema de choclo. Pelar la cebolla y picarla fino. Desgranar los choclos y procesar la mitad. En una sartén, calentar la manteca restante y rehogar la cebolla. Sumar los granos de choclo, el choclo procesado, la salsa bechamel y la crema de leche. Cocinar 3 minutos, salpimentar y retirar.

Paso 7

Las papas fritas. Pelar las papas y cortarlas en bastones finos. Lavarlos y secarlos con un paño. Freír las papas en abundante aceite caliente. Escurrirlos sobre papel absorbente y salar.

Paso 8

Las bananas fritas. Pelar las bananas. Pasarlas por el huevo batido y, luego, por pan rallado. Freírlas en abundante aceite caliente. Retirar y escurrir sobre papel Calentar en una sartén el pocillo de aceite y freír los huevos. La clara debe quedar cocida y el centro amarillo, jugoso. Retirar.

Paso 9

Para la presentación: servir las supremas. Encima de cada una, colocar 1 trozo de morrón y 1 huevo frito. Rodear con las papas fritas y las bananas fritas. Salpimentar Acompañar con la crema de choclo en cazuelita aparte.




                                -->



                        </div>
                    </div>
                    
                    <div id="recursosReceta">
                        <div>
                            <img src="../imagenes/RecetaEscrita/<?php echo $milanesaMaryland -> imagenRecetaEscrita?>" alt="Esta es una foto de la receta">
                        </div>

                        <div class="recursosReceta__notas">
                            <div class="recursosReceta__notas--title">
                                <p>Notas</p>
                            </div>
                            <p class="recursosReceta__notas--p">Este plato suele hacerse con milanesas y bananas fritas pero también puede cocinarlas en el horno. </p>
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