
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    
    <link rel = "icon" href = "../imagenes/faviconRecetario.ico">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@600;700&family=Playfair+Display:wght@500&display=swap&family=Karla&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles.css">
    <title>Recetario - Inicio</title>
    <link rel = "icon" href = "imagenes/faviconRecetario.ico">
</head>

<body>
    

    <section id='modal__inicieSesion'>
        <div id='modal__content'>
            <header id='modal__header'>
                <p id='modalTitle'>Inicie sesión</p>
                <button id='close-modal'> ✕ </button>
            </header>

            <div id='modal__body'>
                <div id='modal__body--form'>
                    <form action='index.php' method='POST'>
                        <div class="divFormModal">
                            <label for='modal__body--formMail' class='centrandoForm'>Mail</label>
                            <br>
                            <input name='mailLogin' type='text' method='POST' id='modal__body--formMail' class='modal__body--input'></input>
                        </div>

                        <div class="divFormModal">
                            <label for='modal__body--formContraseña' class='centrandoForm'>Contraseña</label>
                            <br>
                            <input name='contraseñaLogin' type='password' method='POST' id='modal__body--formContraseña' class='modal__body--input'></input>
                        </div>

                        <div id='modal__body--recuerdameContraseña'>
                            <div class='recuerdameContraseña__ctn--checkbox centrandoForm'>
                                <input type='checkbox' name='' class='recetas__checkbox'>
                                <label id='modal__body--recuerdame'> Recuérdame</label>
                            </div>

                            <!--<div>
                                <a href='' id='modal__body--forgotPass'>Olvidé mi contraseña</a>
                            </div>-->

                        </div>

                        <div class="modal__body--button">
                            <input type='submit' id='modal__body--buttonInicieSesion' value='Iniciar sesión'></button>
                        </div>
                    </form>

                    <p id='modal__body--textoRegistrate'>¿Aún no tenés una cuenta? <a href='registro.php' target='_blank'>Registrate acá</a> </p>
                    

                    <!--
                    <div id='modal__body--otroInicio'>
                        <div id='modal__body--linea1'></div>
                        <p id='modal__body--textoEntreLineas'>O inicia sesión con</p>
                        <div id='modal__body--linea2'></div>
                    </div>

                    <div class="modal__body--button">
                        <button id='modal__body--buttonGoogle'>Google</button> 
                    </div>
                    -->
                
                </div>

                <div id='modal__body--illustration'>
                    <img src='imagenes/modal__body--illustration.jpg' alt=''>
                </div>
            </div>
        </div>
                             
    </section>


















</body>
</html>
