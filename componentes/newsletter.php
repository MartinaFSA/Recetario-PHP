<?php 
    if(isset($_POST["pageEnd__form--button"])) {
        if(isset($_POST['mailNewsletter'])) {
            $mailNews = $_POST['mailNewsletter'];

            if(filter_var($mailNews, FILTER_VALIDATE_EMAIL)) {
                $asunto = 'Recetario - Newsletter';
                $mensaje = 'Hola! Gracias por suscribirte al newsletter del recetario. A partir de ahora te llegarán mails de esta dirección de correo electrónico avisándote cuando subimos recetas y abrimos nuevas secciones en la página.';
            
                mail($mailNews, $asunto, $mensaje, 'From: martinafsa8@gmail.com');

                $news = "Gracias por suscribirte al newsletter!";

                header("Refresh: 1; url = ../index.php"); 

            }else {
                $news = "ERORR, inserte una dirección de mail válida";

                header("Refresh: 1; url = ../index.php"); 
            }
        }
        
        header("Refresh: 1; url = ../index.php"); 
    }
?>