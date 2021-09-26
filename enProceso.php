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
        <title>Página en construcción</title>
        <link rel = "icon" href = "imagenes/faviconRecetario.ico">
    </head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <body>
        <?php 
            require_once ("componentes/header.php"); 
        ?>

        <h2>PÁGINA EN CONSTRUCCIÓN</h2>

        <p id='textitou'>Próximamente va a estar disponible esta función,
            <br>seguí las novedades de la página suscribiéndote al NewsLetter!
        </p>
        
        <style>
            
            h2 {
                color: rgb(33, 35, 34);
                cursor: default;
                font: bolder calc(1em + 1vw) 'Karma', serif; /*style, variant, weight, size, family*/
                text-align: center;
                margin: 70px 0px 35px;
            }

            #textitou {
                color: rgb(33, 35, 34);
                cursor: default;
                font: bolder calc(1em + 1vw) 'Karla', sans-serif; /*style, variant, weight, size, family*/
                text-align: center;
                margin: 0px 0px 70px;
            }
        </style>

        <?php
            include("componentes/pageEnd_footer.php");
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>