<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            require("componentes/head.php");
        ?>
        
        <link rel = "icon" href = "imagenes/faviconRecetario.ico">
        <title>Recetario - Registro</title>        
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
                    <h1 id="formH1">Registrate</h1>
                </div>

                <div class="cajaConForm">
                    <form action="componentes/register.php" method="POST"> <!--CAMBIAR EL METHOD A POST y que no redireccione a otra pestaña-->
                        <label for="register--formMail">Mail</label>
                        <br>
                        <input type="text" name="mailRegister" id="register--formMail" class="form--input" placeholder="laura@ejemplo.com" require autofocus>
                        <br>

                        <label for="register--formContraseña">Contraseña</label>
                        <br>
                        <input type="password" name="contraseñaRegister" id="register--formContraseña" class="form--input" require>
                        <br>
                        
                        <input type="submit" class="form--button" value="Registrarme">
                    </form>
                </div>
                
                <div class="ilustraciones">
                    <img src="imagenes/batidor.png" alt="" id="batidor">
                    <img src="imagenes/cuchara.png" alt="" id="cuchara">
                </div>
            </section>
            
            <!--SECCIÓN FIN DE PÁGINA-->
            <section id="pageEnd">
                <div>
                    <p id="pageEnd__title"> ¿Querés que te avisemos cuando subimos nuevas recetas? </p>
                    <p id="pageEnd__subtitle"> Suscribite al newsletter acá! </p>
                </div>

                <div id="pageEnd__form">
                    <form action="" method="POST">
                        <input type="email" name="mailNewsletter" placeholder="mariano@example.com" id="pageEnd__form--input">
                        <input type="submit" id="pageEnd__form--button" value="Suscribirme">
                    </form>
                </div>
            </section>
        </main>
        
        <footer>
            <section class="container">
                <div class="row footer__section">
                    <div class="col footer__links">
                        <ul>
                            <il> <p> <a href=""> <i class="far fa-envelope fa-lg"></i> compañia@example.com </p> </a> </il>
                            <il> <p> <a href=""> <i class="fab fa-youtube fa-lg"></i> MiCanal</p> </a> </il>
                            <il> <p> <a href="">  <i class="fab fa-instagram fa-lg"></i> @MiInstragram</p> </a> </il>
                        </ul>
                    </div>
                
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="ctn__footer--logo">
                            <img class="footer__logo" src="imagenes/SVG/logoRecetario.svg" alt="Logo de la página">
                        </div>
                    </div>
                </div>

            </section>
        </footer>
    <script src="javascript.js"></script>
    </body>
</html>