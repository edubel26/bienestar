<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPmailer/PHPMailer.php';
require '../PHPmailer/SMTP.php';
require '../PHPmailer/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


$enviado=false;

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.botellasdivino.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bienestar@botellasdivino.com';                     //SMTP username
    $mail->Password   = 'emailbienestar';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       =  465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bienestar@botellasdivino.com', 'SIBIS');
    $mail->addAddress($email);     //Add a recipient
   

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Resolución de alojamiento';
    $mail->Body    = '
    <html lang="en">
    <meta charset="utf-8" />
    <head>
      <title>Resolución</title>
    </head>
    <body>
        <h2>MIGRACION COLOMBIA</h2>
        <p>Resolución de alojamiento</p>
        <p>El estado de su solicitud es: '.$fk_id_rol.'. </p>
    </body>
    </html>
    ';
    
    $mail->send();
    
    $enviado=true;
} catch (Exception $e) {
    echo "Hubo un erro al enviar e mensaje: {$mail->ErrorInfo}";
}
?>