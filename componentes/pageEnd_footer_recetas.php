    <!--SECCIÓN FIN DE PÁGINA-->
    <section class="pageEnd">
        <div>
            <p class="pageEnd__title textoGrande">¿Querés que te avisemos cuando subimos nuevas recetas?</p>
            <p class="pageEnd__subtitle textoGrande">Suscribite al newsletter acá!</p>
        </div>

        <div class="pageEnd__form">
            <form action="../componentes/newsletter.php" method="POST">
                <input type="email" name="mailNewsletter" placeholder="mariano@example.com" class="pageEnd__form--input textoChico">
                <input type="submit" name="pageEnd__form--button" class="pageEnd__form--button textoChico" value="Suscribirme">
            </form>
        </div>

        <!--MODAL-->
        <?php 
            if(isset($news)) { //Si $aviso existe...
                    
                echo "<section class='contenedorDeModales'>
                    <!--Modal receta agregada-->
                    <div class='modalAviso ctn__modalPHP'>
                        <div class='modalPHP'>
                            <p class='textoChico'>" . $news . "</p>
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
                    <il> <p> <a href=""> <i class="far fa-envelope fa-lg textoMediano"></i> compañia@example.com </p> </a> </il>
                    <il> <p> <a href=""> <i class="fab fa-youtube fa-lg textoMediano"></i> MiCanal</p> </a> </il>
                    <il> <p> <a href="">  <i class="fab fa-instagram fa-lg textoMediano"></i> @MiInstragram</p> </a> </il>
                </ul>
            </div>
        
            <div class="ctn__footer--logo">
                <a href="../index.php"><img class="footer__logo" src="../imagenes/SVG/logoRecetario.svg" alt="Logo de la página"></a>
            </div>
        </div>
    </section>
</footer>

<script src="../scripts/javascript.js"></script>