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
    
        <title>Recetario - Recetas sin TACC</title>
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
        <!--SECCIÓN RECETAS-->
        <section class="encabezado_section">
            <div class="ctnEncabezado">
                <h1 class="textoTitulos">Recetas sin TACC</h1>
            </div>
            <div class="ctnButton">
                <button class="encabezado_section__button"><a href="todas.php" class="encabezadoSection__button--link textoChico">Más recetas</a></button>
            </div>
        </section>

        <section>
            <p class="texto_indicaciones">Las siguientes recetas no contienen trigo, avena, centeno ni cebada.</p>
            <p class="texto_indicaciones">TIP: Si te gusta alguna receta que contenga TACC, probá reemplazarlos con <a href="tips/recetas_sinTACC.php">estos ingredientes</a>.</p>
        </section>

        <!--CARDS-->
        <section class="cnt_recetas">
            <div class="ctn_cards container-fluid">
                <div class="cards__recetas textoChico row">
                    <?php
                        $conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);

                        $sql = mysqli_query($conexion,
                            "SELECT * FROM recetas WHERE ingredientes__receta NOT LIKE '%trigo%' 
                            AND ingredientes__receta NOT LIKE '%avena%' 
                            AND ingredientes__receta NOT LIKE '%centeno%' 
                            AND ingredientes__receta NOT LIKE '%cebada%'"
                        );

                        while ($recetaEncontrada = mysqli_fetch_assoc($sql)) {
                        ?>
    
                            <form action='' method='POST' class='card__receta col-sm-12 col-md-6 col-lg-6 col-xl-3'>

                                <input type='text' name='imagenSReceta' id='imagenSReceta' class='imgReceta' alt='Foto del platillo' style="background-image: url('imagenes/CardsRecetas/<?php echo $recetaEncontrada['imagen__receta']?>')">

                                <a href='<?php echo $recetaEncontrada['link__receta'] ?>'><input type='text' name='recetaSlink' id='recetaSlink' class='card__receta--button botonVerde textoBlanco textoChico flexAndCenter' value='VER RECETA'></a>
                                
                                <input type='hidden' name='recetalink' id='recetalink' value='<?php echo $recetaEncontrada['link__receta'] ?>'>
                                <input type='hidden' name='imagenReceta' id='imagenReceta' value='<?php echo $recetaEncontrada['imagen__receta'] ?>'>

                                <div class='card__receta--info'>
                                    <input type='text' name='recetaname' id='recetaname' class="textoChico" value='<?php echo $recetaEncontrada['nombre__receta'] ?>'> 
                                    <input type='text' name='recetainfo' id='recetainfo' class="textoChico" value='<?php echo $recetaEncontrada['info__receta']?>'>
                                </div>
                                
                                <button name='botonControlador' value='guardar' type='submit' class='card__receta--buttonGuardarIndex modal__inicieSesion--button botonGuardarNoActive' id='<?php echo str_replace(' ', '', $recetaEncontrada['nombre__receta'])?>'> </button>
                                
                                <input type='hidden' name='receta_id' value='<?php echo $recetaEncontrada['ID']?>'>
                                
                            </form>
                        <?php
                            }
                    ?>
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

        <script src="../scripts/javascript.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>