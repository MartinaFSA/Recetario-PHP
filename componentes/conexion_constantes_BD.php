<?php
    //Defino constantes con su nombre y valor
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("CONTRASEÑA", "");
    define("BASEDATOS", "recetario");

    //Establezco conexión
    $servidor = "mysql:dbname=" . BASEDATOS . "; host=" . SERVIDOR;

    //try y catch sirven para adelantarse a los errores que puedan producirse en el código
    try {
        $pdo = new PDO($servidor, USUARIO, CONTRASEÑA, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8") );
        //El establecer la codificación utf8 desde ahora evita que se produzcan caracteres extraños
        //echo "Conectado correctamente";
    } catch(PDOException $e) {
        echo "La conexión ha fallado";
    }


    //Crear BD si aún no existe
    $conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA);
    $creaBDRecetario = "CREATE DATABASE IF NOT EXISTS recetario";

    //Crear tablas si aún no existen e ingresar datos de recetas

    if(mysqli_query($conexion, $creaBDRecetario)) {

        $creaTablaUsuarios = mysqli_query(mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS), "CREATE TABLE usuarios
        (mail VARCHAR (255) NOT NULL PRIMARY KEY,
        contraseña VARCHAR (255) NOT NULL
        )");

        $creaTablaRecetas = mysqli_query(mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS), "CREATE TABLE recetas
                        (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        nombre__receta VARCHAR (27) NOT NULL,
                        info__receta VARCHAR (255),
                        imagen__receta VARCHAR (50),
                        link__receta VARCHAR (255)
                        )"
        );
        
        $conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);

        $traeReceta = "SELECT * FROM recetas WHERE nombre__receta = 'Sopa de Cebolla'";
        $creaRecetas = $conexion->query($traeReceta);
        $resultado = mysqli_fetch_assoc($creaRecetas);

        if($resultado > 0){
        } else {
            mysqli_query($conexion, "INSERT INTO recetas (id, nombre__receta, info__receta, imagen__receta, link__receta) values ('NULL','Sopa de Cebolla','Receta francesa de sopa de cebolla caramelizada.','sopaCebolla.jpg','sopas_guisos/sopaCebolla.php')");
        }
        
        $traeReceta = "SELECT * FROM recetas WHERE nombre__receta = 'Pionono'";
        $creaRecetas = $conexion->query($traeReceta);
        $resultado = mysqli_fetch_assoc($creaRecetas);

        if($resultado > 0){
        } else {
            mysqli_query($conexion, "INSERT INTO recetas (id, nombre__receta, info__receta, imagen__receta, link__receta) values ('NULL','Pionono','Masa básica de piono e ideas para rellenos dulces y salados.','pionono.jpg','tortas_tartasDulces/pionono.php')");
        }
        
        $traeReceta = "SELECT * FROM recetas WHERE nombre__receta = 'Papa Rellena'";
        $creaRecetas = $conexion->query($traeReceta);
        $resultado = mysqli_fetch_assoc($creaRecetas);

        if($resultado > 0){
        } else {
            mysqli_query($conexion, "INSERT INTO recetas (id, nombre__receta, info__receta, imagen__receta, link__receta) values ('NULL','Papa Rellena','Papa rellena de brócoli y salsa bechamel.','papaRellena.jpg','otrasRecetasSaladas/papaRellena.php')");
        }
        
        $traeReceta = "SELECT * FROM recetas WHERE nombre__receta = 'Suprema Maryland'";
        $creaRecetas = $conexion->query($traeReceta);
        $resultado = mysqli_fetch_assoc($creaRecetas);

        if($resultado > 0){
        } else {
            mysqli_query($conexion, "INSERT INTO recetas (id, nombre__receta, info__receta, imagen__receta, link__receta) values ('NULL','Suprema Maryland','Suprema con puré, humita, morrón horneado, jamón y banana frita.','milanesaMaryland.jpg','otrasRecetasSaladas/milanesaMaryland.php')");
        }

    }else {
        echo "No se ha podido crear la tabla";
    }

?>