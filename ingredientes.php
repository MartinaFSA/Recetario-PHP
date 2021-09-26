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

    <link rel="stylesheet" href="estilos/styles_ingredientes.css">

    <title>Recetario - Busqueda por ingrediente</title>
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
                <h1 class="textoTitulos">Buscador de recetas por ingredientes</h1>
            </div>
            <div class="ctnButton">
                <button class="encabezado_section__button"><a href="todas.php" class="encabezadoSection__button--link textoChico">Más recetas</a></button>
            </div>
        </section>

        <section>
            <p class="texto_indicaciones">Ingresá los ingredientes que quieras usar en la siguiente caja.</p>
            <p class="texto_indicaciones">Entre cada ingrediente debe ir una coma.</p>
        

            <form action="busqueda.php" method="POST" class="buscadorRecetas_barraBusqueda col-auto">
                <input name="input_quieroUsar" type="text" class="buscadorRecetas_barraBusqueda_text textoChico inputBlancoSinBorde" placeholder="Choclo, atún, garbanzos, brócoli...">
                <button name="btn_quieroUsar" type="submit" class="buscadorRecetas_barraBusqueda_search textoChico textoChico textoBlanco botonVerde">Buscar</button>    
            </form>
        </section>
<!--
        <section>
            <p class="texto_indicaciones">Si querés buscar recetas que contengan <span class="textoVerde">obligatoriamente</span> algún ingrediente,</p>
            <p class="texto_indicaciones">escribilos en la cajita y pulsa este botón.</p>
        

            <form action="busqueda.php" method="POST" class="buscadorRecetas_barraBusqueda col-auto">
                <input name="input_contiene" type="text" class="buscadorRecetas_barraBusqueda_text textoChico inputBlancoSinBorde" placeholder="Lechuga, lentejas, avena...">
                <button name="btn_contiene" type="submit" class="buscadorRecetas_barraBusqueda_search textoChico textoChico textoBlanco botonVerde">Buscar</button>    
            </form>
        </section>
-->        

        <section>
            <p class="texto_indicaciones">Si querés buscar recetas que <span class="textoRojo">NO contengan</span> algún ingrediente,</p>
            <p class="texto_indicaciones">escribilos en la cajita y pulsa este botón.</p>
        

            <form action="busqueda.php" method="POST" class="buscadorRecetas_barraBusqueda col-auto">
                <input name="input_noContiene" type="text" class="buscadorRecetas_barraBusqueda_text textoChico inputBlancoSinBorde" placeholder="Harina, huevo, azúcar...">
                <button name="btn_noContiene" type="submit" class="buscadorRecetas_barraBusqueda_search textoChico textoChico textoBlanco botonVerde">Buscar</button>    
            </form>
        </section>
                
        <?php
            include("componentes/pageEnd_footer.php");
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>