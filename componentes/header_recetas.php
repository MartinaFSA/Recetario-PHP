<header id="header">
    
<!--BARRA DE NAVEGACIÓN-->
    <nav class="navBar">
                                
        <ul class="navBar__menu">
            <li class="navBar__menu-item"><a class="menu-item--link" href="../index.php">Todas las recetas</a></li>
            <li class="navBar__menu-item"><a class="menu-item--link" href="../guardadas.php">Recetas guardadas</a></li>
            <li><hr id="navBar__menu-divider"></li>
            <?php
                if(isset($_SESSION['mail'])) {
                    echo "<li class='navBar__menu-item'><a class='menu-item--link' href='componentes/logout.php'>Cierre Sesión</a> </li>";
                }else {
                    echo "<li class='navBar__menu-item'><a class='menu-item--link' href='inicioSesion.php'>Inicie Sesión</a> </li>";
                }
            ?>
        </ul>

        <div class="navBar__hamburger">
            <span class="hamburger--bar"></span>
            <span class="hamburger--bar"></span>
            <span class="hamburger--bar"></span>
        </div>

        <div>
            <a href="../index.php" class="navBar__logo">Recetario</a>
        </div>               

        <div class="navBar__search">
            <button onclick="mostrarSearch()"><i class="fas fa-search navBar__search--lupita" style="color: #121212;"></i></button>
            <input type="text" placeholder="Buscar" class="navBar__search--input">
        </div>

    </nav>
</header>





