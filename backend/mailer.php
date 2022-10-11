<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
//require '/vendor/autoload.php';

//recogida de valores
$nombre = trim(isset($_POST['nombre']) ? $_POST['nombre'] : "");
//$apellido = trim(isset($_POST['apellido']) ? $_POST['apellido'] : "");
$email = trim(isset($_POST['email']) ? $_POST['email'] : "");
$telefono = trim(isset($_POST['telefono']) ? $_POST['telefono'] : "");
//$asunto = trim(isset($_POST['asunto']) ? $_POST['asunto'] : "");
//$presupuesto = trim(isset($_POST['presupuesto']) ? $_POST['presupuesto'] : "");
$mensaje = trim(isset($_POST['mensaje']) ? $_POST['mensaje'] : "");
$privacidad = trim(isset($_POST['privacidad']) ? $_POST['privacidad'] : "");

$objRespuesta = new stdClass();
if ($nombre && $email && $mensaje && $privacidad) {

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;              //Enable verbose debug output
        $mail->isSMTP();                                      //Send using SMTP
        $mail->Host = 'mail.estovaenserio.com';           //Set the SMTP server to send through
        $mail->SMTPAuth = true;                             //Enable SMTP authentication
        $mail->Username = 'oscar@estovaenserio.com';          //SMTP username
        $mail->Password = 'FTS-N0MAD-Enserio?-oscar2%';                    //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587; //465                         //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('noreply@estovaenserio.com', 'Enserio');
        $mail->addAddress('info@fliptheshot.com');
        $mail->addReplyTo($email, $nombre);;

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Formulario de contacto';

        $html = '<strong>Nuevo formulario de contacto web</strong>' . '<br>' .
            'Nombre completo: ' . $nombre . '<br>' .
            'Email: ' . $email . '<br>';
        $altBody = 'Nuevo formulario de contacto web' .
            'Nombre completo: ' . $nombre . '<br>' .
            'Email: ' . $email;

        if ($telefono) {
            $html .= 'Teléfono: ' . $telefono . '<br>';
            $altBody .= 'Telefono: ' . $telefono;
        }

        $html .=
            'Mensaje: ' . $mensaje . '<br>' .
            'Se ha aceptado la política de privacidad';
        $altBody .=
            'Mensaje: ' . $mensaje . 'Se ha aceptado la política de privacidad';

        $mail->Body = $html;
        $mail->AltBody = $altBody;

        $mail->send();
        $mensaje = 'Mensaje enviado';
        $objRespuesta->status = 1;
        $objRespuesta->code = 1;
    } catch (Exception $e) {
        $objRespuesta->status = 0;
        $objRespuesta->code = 2;
        $mensaje = "No se pudo enviar el email. Mailer Error: {$mail->ErrorInfo}";
    }
} elseif (!$privacidad) {
    $objRespuesta->status = 0;
    $objRespuesta->code = 2;
    $mensaje = 'No se ha aceptado la política de privacidad';
} else {
    $objRespuesta->status = 0;
    $objRespuesta->code = 1;
    $mensaje = 'Faltan datos obligatorios';
}
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');
header('content-type: application/json; charset=utf-8');
$objRespuesta->msg = $mensaje;
echo json_encode($objRespuesta);
