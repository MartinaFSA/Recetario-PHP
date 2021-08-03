<?php
    class Receta {
        //Atributos
        public $palabra1;
        public $palabra2;
        public $tiempo_prep;
        public $tiempo_coccion;

        //Establezco el atributo con una variable
        public function __construct($palabra1, $palabra2, $tiempo_prep, $tiempo_coccion) {
            $this -> palabra1 = $palabra1;
            $this -> palabra2 = $palabra2;
            $this -> tiempo_prep = $tiempo_prep;
            $this -> tiempo_coccion = $tiempo_coccion;
        }
    }
        /*public function crearRow() {
            include (".php");
            $comprobandoRecetas = mysqli_query($conexion, "SELECT * FROM recetas WHERE id__receta = 'id__receta'");
            
            if (!$comprobandoRecetas > 0){
                $insertandoRecetas = mysqli_query ("INSERT INTO 'recetas' ('nombre_receta', 'imagen_receta', 'info_card', 'link_receta', 'id__receta') VALUES ('$nombre__receta', '$imagen__receta','$info__card', '$link__receta', '$id__receta')"); 
            } else {
                $var = 0+0;
            }
            //"INSERT INTO recetas (nombre_receta, imagen_receta, info_card, link_receta, id__receta) SELECT * FROM (SELECT '$nombre__receta' AS nombre_receta, '$imagen__receta' AS imagen_receta,'$info__card' AS info_card, '$link__receta' AS link_receta, '$id__receta' AS id__receta) AS temp WHERE NOT EXISTS (SELECT nombre_receta FROM recetas WHERE nombre_receta = '$nombre__receta') LIMIT 1"

            //No sale con eso, poner: INSERT INTO recetas (nombre_receta, imagen_receta, info_card, link_receta, id__receta) VALUES ...;
        }*/
    
    
    //Modelo receta
    $otra = new Receta ("Otra de", "Otra", "??? minutos", "? horas");

    //Sopa de cebolla francesa 
    $sopaCebolla = new Receta ("Sopa de ", "Cebolla", "20 minutos", "2 horas");

    //Milanesa Maryland Suprema Maryland
    $milanesaMaryland = new Receta ("Milanesa", "Maryland", "1 horas", " horas");

    //Pionono Arrollado
    $pionono = new Receta ("Pionono", "Masa Básica", "20 minutos", "10 minutos");

    //Papa Rellena
    $papaRellena = new Receta ("Papa", "Rellena", "20 minutos", "2 horas");
?>