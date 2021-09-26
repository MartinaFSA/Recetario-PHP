<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("componentes/head.php");
        ?>

        <title>Recetario - Inicio Sesión</title>
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
            <section class="formCtn">
                <div id="form__ctnH1">
                    <h1 class="formH1 textoTitulos">Inicia Sesión</h1>
                </div>

                <div class="cajaConForm">
                    <form action="componentes/login.php" method="POST"> <!--CAMBIAR EL METHOD A POST y que no redireccione a otra pestaña-->
                        <label for="login--formMail">Mail</label>
                        <br>
                        <input type="text" name="mailLogin" id="login--formMail" class="form--input textoChico" placeholder="laura@ejemplo.com" require autofocus>
                        <br>

                        <label for="login--formContraseña">Contraseña</label>
                        <br>
                        <input type="password" name="contraseñaLogin" id="login--formContraseña" class="form--input textoChico" require>
                        <br>
                        
                        <input type="submit" class="form--button textoChico" value="Iniciar sesión">
                        <a href="registro.php" class="textoChico">o registrate acá</a>
                    </form>
                </div>
                
                <div class="ilustraciones">
                    <img src="imagenes/batidor.png" alt="" id="batidor">
                    <img src="imagenes/cuchara.png" alt="" id="cuchara">
                </div>
            </section>   
        
        <?php
            include("componentes/pageEnd_footer.php");
        ?>
    </body>
</html>