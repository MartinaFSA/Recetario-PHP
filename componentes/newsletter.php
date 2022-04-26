<?php 
    if(isset($_POST["pageEnd__form--button"])) {
        if(isset($_POST['mailNewsletter'])) {
            $mailNews = $_POST['mailNewsletter'];

            if(filter_var($mailNews, FILTER_VALIDATE_EMAIL)) {
                $asunto = 'Recetario - Newsletter';
                $mensaje = 'Hola! Gracias por suscribirte al newsletter del recetario. A partir de ahora te llegarán mails de esta dirección de correo electrónico avisándote cuando subimos recetas y abrimos nuevas secciones en la página.';
            
                mail($mailNews, $asunto, $mensaje, 'From: martina.fernandez.sa@gmail.com');

                $news = "Gracias por suscribirte al newsletter!";

                //header("Refresh: 1; url = ../index.php"); 

            }else {
                $news = "ERORR, inserte una dirección de mail válida";
                //header("Refresh: 1; url = ../index.php"); 
            }
        }
        

        /*HTML FOR EMAILS:
        
        
        Start with the structure. Your HTML template will begin with a doctype telling the email client what to expect. Follow this with your header. This is where your media queries, styling and any animations will go. Everything following your header counts as the body of the email. Enclose this content with body tags.
        Forget separate CSS files. Most email clients do not support them. Which means you’re going to have to get your HTML and CSS to play together nicely in a different way: inline CSS styles. They’re recognizable by most email clients and they can be used for key newsletter design elements, such as background colors and fonts.
        Embrace the table. For newsletter layout, use nested HTML tables. I know. I know. This feels very 1999, but that’s what we’ve got to work with. Table tags are how you get around the fact that email clients support neither the rowspan attribute nor the colspan attribute. You’ll want to use tables throughout. Use cell padding for improved readability.
        Remember the alt text. Save your images separately and include alt-text tags. This improves accessibility and makes things easier for those reading your newsletter in those email clients that block images.
        Be specific about your font! The usual HTML tags, such as H1 and H2, won’t render correctly in email clients. You need to specify font size and style directly in the HTML. Note, however, that not all fonts will render correctly. Read more about the best font to use for email.
        https://www.sendinblue.com/blog/how-to-get-your-email-campaign-past-the-spam-filters/
        https://www.sendinblue.com/blog/best-email-newsletter-examples/
        
        */
    }
?>