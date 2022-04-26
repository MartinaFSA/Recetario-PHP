<header id="header">
    
<!--BARRA DE NAVEGACIÓN-->
    <nav class="navBar">
                                
        <ul class="navBar__menu">
            <li class="navBar__menu-item"><a class="menu-item--link textoChico" href="../todas.php">Todas las recetas</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link textoChico" href="../ingredientes.php">Buscar por ingrediente</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link textoChico" href="../sinTACC.php">Sin TACC</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link textoChico" href="../sinLacteos.php">Sin lácteos</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link" href="../veganas.php">Recetas veganas</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link" href="../vegetarianas.php">Recetas vegetarianas</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link" href="../panes.php">Panes</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link" href="../menus.php">Menús completos</a></li>
            <li><hr id="navBar__menu-divider"></li>
            <li class="navBar__menu-item"><a class="menu-item--link textoChico" href="../guardadas.php">Recetas guardadas</a></li>
            <?php
                if(isset($_SESSION['mail'])) {
                    echo "<li class='navBar__menu-item'><a class='menu-item--link textoChico' href='componentes/logout.php'>Cierre Sesión</a> </li>";
                }else {
                    echo "<li class='navBar__menu-item'><a class='menu-item--link textoChico' href='inicioSesion.php'>Inicie Sesión</a> </li>";
                }
            ?>
        </ul>

        <div>
            <div class="navBar__hamburger">
                <span class="hamburger--bar"></span>
                <span class="hamburger--bar"></span>
                <span class="hamburger--bar"></span>
            </div>

            <div>
                <a href="../index.php" class="navBar__logo textoTitulos">Recetario</a>
            </div>               

            <div class="navBar__search">
                <form action="../busqueda.php" method="POST">
                    <span onclick="mostrarSearch()"><i class="fas fa-search navBar__search--lupita" style="color: #353535;"></i></span>
                    <input name="buscadorSearchSecc" type="text" placeholder="Buscar" class="inputBlancoSinBorde navBar__search--input textoChico" autofocus>
                    <input name="buscadorSearchSecc__submit" class="botonVerde textoBlanco navBar__search--submit textoChico" type="submit" value="Buscar">
                </form>
            </div>
        </div>
    </nav>
</header>





