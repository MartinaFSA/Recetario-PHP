<?php      
        if (isset($_POST['botonControlador'])) {
            
            switch($_POST['botonControlador']) {

                case 'guardar':
                    
                    if(isset($_SESSION['mail'])) {
                        if (is_string($_POST['receta_id'])) {
                            $id = $_POST['receta_id'];
                        }else{
                            $id = $_POST['receta_id'];
                            break;
                        }

                        if (is_string($_POST['recetaname'])) {
                            $nombre__receta = $_POST['recetaname'];
                        }else{
                            $nombre__receta = $_POST['recetaname'];
                            break;
                        }

                        if (is_string($_POST['recetainfo'])) {
                            $info__receta = $_POST['recetainfo'];
                        }else{
                            $info__receta = $_POST['recetainfo'];
                            break;
                        }

                        if (is_string($_POST['recetalink'])) {
                            $link__receta = $_POST['recetalink'];
                        }else{
                            $link__receta = $_POST['recetalink'];
                            break;
                        }

                        if (is_string($_POST['imagenReceta'])) {
                            $imagen__receta = $_POST['imagenReceta'];
                        }else{
                            $imagen__receta = $_POST['imagenReceta'];
                            break;
                        }

                        if(isset($_SESSION['recetasGuardadas'])){
                            //Si tengo recetas guardadas...

                            $idRecetas = array_column($_SESSION['recetasGuardadas'], 'ID');

                            /*
                            COMENTO ESTO PORQUE SOLO DEJA GUARDAR UNA RECETA    
                            if(in_array($id, $idRecetas)) { 

                                $aviso = "La receta " . $nombre__receta . " ya ha sido guardada";
                                break;

                            }else{*/ 
                                //Cuento la cantidad de elementos guardados para establecer la posición de la receta que voy a guardar ahora
                                $cantidadRecetasGuardadas = count($_SESSION['recetasGuardadas']);
            
                                $recetaArray = array (
                                    //Tomo las variables de antes
                                    'ID' => $id,
                                    'NombreReceta' => $nombre__receta,
                                    'InfoReceta' => $info__receta,
                                    'LinkReceta' => $link__receta,
                                    'ImagenReceta' => $imagen__receta
                                );
            
                                $_SESSION['recetasGuardadas'][$cantidadRecetasGuardadas] = $recetaArray;

                                $aviso = "Receta " . $recetaArray['NombreReceta'] . " guardada";
                                break;
                            // }                   

                        }else{
                            $aviso = "Receta " . $recetaArray['NombreReceta'] . " guardada";

                            //Si NO tengo recetas guardadas...
                            $recetaArray = array (
                                'ID' => $id,
                                'NombreReceta' => $nombre__receta,
                                'InfoReceta' => $info__receta,
                                'LinkReceta' => $link__receta,
                                'ImagenReceta' => $imagen__receta
                            );

                            $_SESSION['recetasGuardadas'][0] = $recetaArray;//Si no tengo nada en el carrito recetaArray toma el valor 0
                        
                            break;
                        }
                    }else {
                        echo "
                            <section id='modal__inicieSesion'>
                                        <div id='modal__content'>
                                            <header id='modal__header'>
                                                <p id='modalTitle'>Inicie sesión</p>
                                                <button id='close-modal'> ✕ </button>
                                            </header>
                
                                            <div id='modal__body'>
                                                <div id='modal__body--form'>
                                                    <form action='componentes/login.php' method='POST'>
                                                        <div class='divFormModal'>
                                                            <label for='modal__body--formMail' class='centrandoForm'>Mail</label>
                                                            <br>
                                                            <input name='mailLogin' type='text' method='POST' id='modal__body--formMail' class='modal__body--input' autofocus></input>
                                                        </div>
                
                                                        <div class='divFormModal'>
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
                                                                <a href='' id='modal__body--forgotPass' class='centrandoForm'>Olvidé mi contraseña</a>
                                                            </div>-->
                
                                                        </div>
                                                        
                                                        <div class='modal__body--button'>
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
                                
                                                    <div class='modal__body--button'>
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
                        ";
                    }
                        
                break;
                
                case 'eliminar':
                    
                    if (is_string($_POST['receta_id'])) {
                        $id = $_POST['receta_id'];
                        foreach ($_SESSION['recetasGuardadas'] as $indice => $recetaArray){//recorro todos los elementos
                            
                            if($recetaArray['ID'] == $id) {
                                //Si el elemento clickeado tiene el mismo id que los elementos encontrados...
                                unset($_SESSION['recetasGuardadas'][$indice]);
                                $aviso = "Receta " . $recetaArray['NombreReceta'] . " eliminada";
                                break;
                            }
                        }

                    }else{
                        break;
                    }
                break;
            }
        }




    /*if(!empty($_POST['contraseñaLogin']) && !empty($_POST['mailLogin'])) { 
                                $usuario = $_POST['mailLogin'];
                                $constraseña = $_POST['contraseñaLogin'];

                                $comprobarDatos = mysqli_query ($conexion,'SELECT * FROM usuarios WHERE mail='$mail' AND contraseña='$constraseña');
                                $row  = mysqli_fetch_array($comprobarDatos); // mysqli_fetch_array() guarda información en índices numéricos del array o en índices asociativos, utilizando los nombres de los campos del resultado como claves.  
                                
                                if(is_array($row)){//si la variable es un array
                                    $_SESSION['mail'] = $row['mail'];
                                    $_SESSION['contraseña'] = $row['contraseña'];
                                    header('Location: guardadas.php'); //Es una manera de forzar el envío de datos antes de que se lean los encabezados de la página.
                                    
                                    echo '<br>';

                                    echo 'Ha iniciado sesión correctamente.';
                                }else {
                                    function errorLogIn() {
                                        echo '<section id='modal__errorLogIn'>' .
                                                '<div id='modal__errorLogIn--content'>' .
                                                    '<header id='modal__header'>' . 
                                                        '<p id='modalTitle'>' . 'Error de inicio de sesión' . '</p>' .
                                                        '<button id='close-modal'>' . '✕'. '</button>' .
                                                    '</header>' .

                                                    '<div id='modal__body'>' .
                                                        '<div id='modal__body--form'>' .
                                                            '<form>' .
                                                                '<div class='centrandoForm'>' .
                                                                    '<label for='modal__body--formMail'>' . 'Mail' . '</label>' .
                                                                    '<br>' .
                                                                    '<input name='mailInicio' type='text' method='POST' id='modal__body--formMail' class='modal__body--input'>' .'</input>' .
                                                                '</div>' .

                                                                '<div class='centrandoForm'>' .
                                                                    '<label for='modal__body--formContraseña'>' . 'Contraseña' . '</label>' .
                                                                    '<br>' .
                                                                    '<input name='contraseñaInicio' type='password' method='POST'id='modal__body--formContraseña' class='modal__body--input'>' .'</input>' .
                                                                '</div>' .

                                                                '<div id='modal__body--recuerdameContraseña'>' .
                                                                    '<div>' .
                                                                        '<input type='checkbox' id='modal__body--recuerdame'>' .  'Recuérdame' . '</input>' .
                                                                    '</div>' .

                                                                    '<div>' .
                                                                        '<a href='' id='modal__body--forgotPass'>' . 'Olvidé mi contraseña' . '</a>' .
                                                                    '</div>' .

                                                                '</div>' .
                                                            '</form>' .
                                                                
                                                            '<button id='modal__body--buttonInicieSesion'>' . 'Iniciar sesión' . '</button>' .
                                                            '<p id='modal__body--textoRegistrate'>' . '¿Aún no tenés una cuenta?' . '<a href='registro.php' tarPOST='_blank'>' . 'Registrate acá' . '</a>' . '</p>' .
                                                            
                                                            '<div id='modal__body--otroInicio'>' .
                                                                '<div id='modal__body--linea1'>' .'</div>' .
                                                                '<p id='modal__body--textoEntreLineas'>' . 'O inicia sesión con' . '</p>' .
                                                                '<div id='modal__body--linea2'>' .'</div>' .
                                                            '</div>' .

                                                            '<button id='modal__body--buttonGoogle'>' . 'Google' . '</button>' .
                                                        
                                                        '</div>' .

                                                        '<div id='modal__body--illustration'>' .
                                                            '<img src='' alt=''>' .
                                                        '</div>' .

                                                    '</div>' .
                                                '</div>' .
                                            '</section>'
                                        ;
                                    }
                                }
                            }else {
                                echo 'debe completar ambos campos';
                            }
  */
?>