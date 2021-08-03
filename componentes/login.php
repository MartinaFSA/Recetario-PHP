
<?php
    include ("head.php");
    //Incluyo la Base de Datos
    $conexion = mysqli_connect("localhost", "root", "", "recetario");    
    
    
    if(!empty($_POST["contraseñaLogin"]) && !empty($_POST["mailLogin"])) { 
        $mail = $_POST['mailLogin'];
        $constraseña = $_POST['contraseñaLogin'];

        //Y SI ESTÁ COMPLETO PERO NO ENCUENTRA ESOS DATOS EN LA BD?
        $comprobarDatos = "SELECT * FROM usuarios WHERE mail='$mail' AND contraseña='$constraseña'";
        $row  = mysqli_fetch_array(mysqli_query($conexion, $comprobarDatos)); // mysqli_fetch_array() guarda información en índices numéricos del array o en índices asociativos, utilizando los nombres de los campos del resultado como claves.  
        
        if(is_array($row)){//si la variable es un array
            session_start();
            $_SESSION['contraseña'] = $row['contraseña'];
            $_SESSION['mail'] = $row['mail'];
            
            echo '<section id="ctn__blobBienvenida">
                    <div id="blobBienvenida">
                        <p>Bienvenido usuario</p>
                        <p>' . $_SESSION['mail'] . '</p>
                    </div>
                </section>
            ';
            header("Refresh: 1; url = ../guardadas.php"); //Es una manera de forzar el envío de datos antes de que se lean los encabezados de la página.
         
        } else {
            echo '<section id="ctn__blobBienvenida">
                <div id="blobBienvenida">
                    <p>Sus datos son incorrectos. <br> Por favor, vuelva a introducirlos.</p>
                </div>
            </section>
        ';
        header("Refresh: 1; url = ../inicioSesion.php"); 
         
        };
    } else { 
        echo '<section id="ctn__blobBienvenida">
                <div id="blobBienvenida">
                    <p>Por favor, complete ambos campos.</p>
                </div>
            </section>
        ';
        header("Refresh: 1; url = ../inicioSesion.php"); 
    }
?>

<style>
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url("../imagenes/SVG/blob.svg");
        background-size: contain;
        background-position: center;
    }
    
    #ctn__blobBienvenida {
        width: 100%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    #blobBienvenida {
        color: #fafafa;
        font: calc(16px + 0.9vw) 'Karma', serif;
        letter-spacing: 1px;
    }
</style>