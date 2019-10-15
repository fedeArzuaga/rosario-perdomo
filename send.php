<?php
if(isset($_POST['email'])) {
 
    // 
 
    $email_to = "rosaperdomito66@gmail.com";
 
    $email_subject = "Mensaje desde la Web rosarioperdomo.com";
 
    function died($error) {
 
        // mensajes de error
 
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
 
        echo "Detalle de los errores.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }
 
    // Se valida que los campos del formulairo estén llenos
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        die('Lo sentimos pero parece haber un problema con los datos enviados.');
 
    }
 //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo
 
    $first_name = $_POST['first_name']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
    $message = $_POST['message']; // requerido
 
    $error_message = "";//Linea numero 52;
 
//En esta parte se verifica que la dirección de correo sea válida 
 
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
  }
 
//En esta parte se validan las cadenas de texto
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'El formato del nombre no es válido<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    die($error_message);
 
  }
 
//Este es el cuerpo del mensaje tal y como llegará al correo
 
    $email_message = "Contenido del Mensaje.\n\n";
 
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);
 
?>
 
 
 
<!-- Mensaje de que fue enviado-->
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <title>Rosario Perdomo - Estilista Profesional</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <!-- Icons -->
        <link rel="stylesheet" href="css/icomoon/style.css">
        
        <style>
        
            .thank-you{
                width: 100%;
                height: 100vh;
                background: url("jpg/bg-inicio(ejemplo).jpg");
            }
            .thank-you-container{
                display: flex;
                flex-flow: column nowrap;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .display-4{
                font-family: Julius Sans One;
            }
            .text-thank{
                font-size: 24px;
                font-weight: lighter;
            }
            .cta:hover{
                text-decoration: none;
                color: white;
            }
        
        </style>
        
    </head>
    <body>
       
        <div class="thank-you">
            <div class="container thank-you-container">
                <h1 class="display-4 text-white">
                    Gracias por comunicarte!
                </h1>
                <p class="text-thank mb-4 text-white">Pronto me pondré en contacto contigo</p>
                <a href="index.html" class="cta">VOLVER A INICIO</a>
            </div>
        </div>
       
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
 
<?php
 
}
 
?>