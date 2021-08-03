<?php
    //Incluyo la Base de Datos
    $conexion = mysqli_connect("localhost", "root", "", "recetario");    
    
    if(isset($_POST["contraseñaRegister"]) && empty($_POST["contraseñaRegister"])) { //Si el input de constraseñaRegister existe y si está vacía
        echo "<section class='ctn__blobRegistro'>
                <div class='blobRegistro'>
                    <p>Por favor, complete el campo contraseña</p>
                </div>
            </section>
        ";

        header("Refresh: 1; url = ../registro.php"); //Es una manera de forzar el envío de datos antes de que se lean los encabezados de la página.
     

    } elseif (isset($_POST["mailRegister"]) && empty($_POST["mailRegister"])) {
        echo "<section class='ctn__blobRegistro'>
                <div class='blobRegistro'>
                    <p>Por favor, complete el campo mail</p>
                </div>
            </section>
        ";
        
        header("Refresh: 1; url = ../registro.php");
     
    } else {
                   
        $mail = $_POST["mailRegister"];
        $constraseña = $_POST["contraseñaRegister"];
        
        if($mail = filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            
            $comprobarDatos = mysqli_query ($conexion,"SELECT * FROM usuarios WHERE mail='$mail'");
            
            if(mysqli_num_rows($comprobarDatos) > 0) {//mysqli_num_rows recorre todas las líneas de la base de datos
                echo "<section class='ctn__blobRegistro'>
                        <div class='blobRegistro'>
                            <p>Esa dirección de mail ya fue registrada.</p>
                            <p>Inicie Sesión</p>
                        </div>
                    </section>
                ";

                header("Refresh: 1; url = ../inicioSesion.php");

            } else{
                $insertaUser = mysqli_query($conexion, "INSERT INTO usuarios(mail, contraseña) VALUES ('$mail', '$constraseña')");

                echo '<section class="ctn__blobRegistro">
                        <div class="blobRegistro">
                            <p>Registro exitoso. Sus datos son:</p>
                            <p>Mail: ' . $mail . ' </p>
                            <p>Contraseña: ' . $constraseña . ' </p>
                        </div>
                    </section>
                ';
                header("Refresh: 1; url = ../inicioSesion.php");
            }
            
        }else{
            echo "<section class='ctn__blobRegistro'>
                <div class='blobRegistro'>
                    <p>Inserte un mail válido</p>
                </div>
                </section>
            ";
            
            header("Refresh: 1; url = ../registro.php");
        }
    }
?>

<style>
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url("../imagenes/SVG/blob2.svg");
        background-size: contain;
        background-position: center;
    }
    
    .ctn__blobRegistro {
        width: 100%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .blobRegistro {
        color: #fafafa;
        font: calc(16px + 0.9vw) 'Karma', serif;
        letter-spacing: 1px;
    }
</style>