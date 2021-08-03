<?php
    session_start();

    unset($_SESSION["mail"]);
    unset($_SESSION["cart"]);
    header("Location: ../inicioSesion.php");
?>