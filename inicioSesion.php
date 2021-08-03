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
        <header>
            <nav class="navBar">
                               
                <ul class="navBar__menu">
                    <li class="navBar__menu-item"><a class="menu-item--link" href="index.php">Todas las recetas</a></li>
                    <li class="navBar__menu-item"><a class="menu-item--link" href="guardadas.php">Recetas guardadas</a></li>
                    <li><hr id="navBar__menu-divider"></li>
                    <li class="navBar__menu-item"><a class="menu-item--link" href="inicioSesion.php">Inicie Sesión</a> </li>
                </ul>

                <div class="navBar__hamburger">
                    <span class="hamburger--bar"></span>
                    <span class="hamburger--bar"></span>
                    <span class="hamburger--bar"></span>
                </div>

                <div>
                    <a href="index.php" class="navBar__logo">Recetario</a>
                </div>

                <input type="text" placeholder="¿Qué deseas buscar?" class="navBar__search--input" onclick="mostrarSearch()">

                <div class="navBar__cntlupita">
                    <i class="fas fa-search" class="navBar--lupita" style="color: #121212;"></i>
                </div>

            </nav>
        </header>

        <main>
            <section class="formCtn">
                <div id="form__ctnH1">
                    <h1 id="formH1">Inicia Sesión</h1>
                </div>

                <div class="cajaConForm">
                    <form action="componentes/login.php" method="POST"> <!--CAMBIAR EL METHOD A POST y que no redireccione a otra pestaña-->
                        <label for="login--formMail">Mail</label>
                        <br>
                        <input type="text" name="mailLogin" id="login--formMail" class="form--input" placeholder="laura@ejemplo.com" require autofocus>
                        <br>

                        <label for="login--formContraseña">Contraseña</label>
                        <br>
                        <input type="password" name="contraseñaLogin" id="login--formContraseña" class="form--input" require>
                        <br>
                        
                        <input type="submit" class="form--button" value="Iniciar sesión">
                        <a href="registro.php">o registrate acá</a>
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
                
                    <div class="footer__logo col-sm-12 col-md-12 col-lg-6">
                        <img src="imagenes/SVG/logoRecetario.svg" alt="Logo de la página">
                    </div>
                </div>

            </section>
        </footer>
    <script src="javascript.js"></script>
    </body>
</html>