    <!--SECCIÓN FIN DE PÁGINA-->
    <section id="pageEnd">
        <div>
            <p id="pageEnd__title"> ¿Querés que te avisemos cuando subimos nuevas recetas? </p>
            <p id="pageEnd__subtitle"> Suscribite al newsletter acá! </p>
        </div>

        <div id="pageEnd__form">
            <form action="../componentes/newsletter.php" method="POST">
                <input type="email" name="mailNewsletter" placeholder="mariano@example.com" id="pageEnd__form--input">
                <input type="submit" name="pageEnd__form--button" id="pageEnd__form--button" value="Suscribirme">
            </form>
        </div>

        <!--MODAL-->
        <?php 
            if(isset($news)) { //Si $aviso existe...
                    
                echo "<section id='contenedorDeModales'>
                    <!--Modal receta agregada-->
                    <div id='modalAviso' class='ctn__modalPHP'>
                        <div class='modalPHP'>
                            <p>" . $news . "</p>
                        </div>
                    </div>

                </section>";
            }
        ?>
        
    </section>
</main>

<footer>
    <section class="container">
        <div class="footer__section">
            <div class="footer__links">
                <ul>
                    <il> <p> <a href=""> <i class="far fa-envelope fa-lg"></i> compañia@example.com </p> </a> </il>
                    <il> <p> <a href=""> <i class="fab fa-youtube fa-lg"></i> MiCanal</p> </a> </il>
                    <il> <p> <a href="">  <i class="fab fa-instagram fa-lg"></i> @MiInstragram</p> </a> </il>
                </ul>
            </div>
        
            <div class="ctn__footer--logo">
                <img class="footer__logo" src="../imagenes/SVG/logoRecetario.svg" alt="Logo de la página">
            </div>
        </div>
    </section>
</footer>