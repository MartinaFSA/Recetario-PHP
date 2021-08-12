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
                    <?php
                        $conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);

                        if(isset($_POST["buscadorSearchSecc__submit"])) { 
                            $busqueda = mysqli_real_escape_string($conexion, $_POST['buscadorSearchSecc']); //Por los caracteres extraños
                        
                            //Si el nombre__receta o la info__receta contienen la palbra buscada...
                            $sql = mysqli_query($conexion, 
                                "SELECT * FROM recetas WHERE nombre__receta LIKE '%$busqueda%' 
                                OR info__receta LIKE '%$busqueda%'
                                "
                            );

                            $cantidadResultadoBusqueda = mysqli_num_rows($sql);

                            //Selecciono todas las recetas que tienen alguna de las palabras en cualquier posición
                            if ($cantidadResultadoBusqueda < 1) {
                                echo "<section id='cnt_recetas'>
                                        <div>
                                            <div>
                                    "
                                ;
                                
                                echo '<h1>' . 'No se han encontrado recetas para "' . $busqueda . '". Pruebe usando otra palabra.' . '</h1> <br>';

                            } else {
                                echo '<h1>' . 'Resultados para "' . $busqueda . '".' . '</h1> <br>';
                                echo "
                                    <section id='cnt_recetas'>
                                        <div class='ctn_cards container-fluid'>
                                            <div class='cards__recetas row'>
                                ";
                                while ($recetaEncontrada = mysqli_fetch_assoc($sql)) {
                    ?>

                                    <form action='' method='POST' class='card__receta col-sm-12 col-md-6 col-lg-6 col-xl-3'>

                                        <input type='text' name='imagenSReceta' id='imagenSReceta' class='imgReceta' alt='Foto del platillo' style="background-image: url('imagenes/<?php echo $recetaEncontrada['imagen__receta']?>')">

                                        <a href='<?php echo $recetaEncontrada['link__receta'] ?>'><input type='text' name='recetaSlink' id='recetaSlink' class='card__receta--button' value='VER RECETA'></a>
                                        
                                        <input type='hidden' name='recetalink' id='recetalink' value='<?php echo $recetaEncontrada['link__receta'] ?>'>
                                        <input type='hidden' name='imagenReceta' id='imagenReceta' value='<?php echo $recetaEncontrada['imagen__receta'] ?>'>

                                        <div class='card__receta--info'>
                                            <input type='text' name='recetaname' id='recetaname' value='<?php echo $recetaEncontrada['nombre__receta'] ?>'> 
                                            <input type='text' name='recetainfo' id='recetainfo' value='<?php echo $recetaEncontrada['info__receta']?>'>
                                        </div>
                                        
                                        <button name='botonControlador' value='guardar' type='submit' class='card__receta--buttonGuardarIndex modal__inicieSesion--button botonGuardarNoActive' id='<?php echo str_replace(' ', '', $recetaEncontrada['nombre__receta'])?>'> </button>
                                        
                                        <input type='hidden' name='receta_id' value='<?php echo $recetaEncontrada['ID']?>'>
                                        
                                    </form>
                                    <style>
                                        .imgReceta {
                                            background-position: center;
                                            background-size: cover;
                                            border-radius: 2% 2% 0% 0%;

                                            width: 300px;
                                            height: 250px;

                                            margin: 0%;
                                            padding: 0%; 
                                        }

                                        #imagenSReceta, #recetaSlink, #recetaname, #recetainfo {
                                            border: none;
                                            -webkit-user-select: none; /* Safari */        
                                            -moz-user-select: none; /* Firefox */
                                            -ms-user-select: none; /* IE10+/Edge */
                                            user-select: none; /* Standard */
                                            pointer-events: none;
                                        }

                                        #imagenSReceta::selection, #recetaname::selection, #recetainfo::selection {
                                            color: none;
                                            background: none;
                                        }
                                        
                                        #imagenSReceta, #recetaname, #recetainfo {
                                            background-color: transparent;
                                            text-align: center;
                                        }

                                        #recetainfo {
                                            overflow-wrap: break-word;
                                        }
                                    </style>
                    <?php
                                }
                            } 

                        } else {
                            header("Refresh: 0.1; url = index.php");
                        }
                    ?>
                    
                </div>
            </div>
        </section>
        
        <?php
            include("componentes/pageEnd_footer.php");
        ?>

        <script src="javascript.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>