<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';
require 'PHPmailer/Exception.php';

     
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$enviado=false;

try {

    //Server settings
    $mail->SMTPDebug = 0;                  //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.botellasdivino.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bienestar@botellasdivino.com';                     //SMTP username
    $mail->Password   = 'emailbienestar';                               //SMTP password
    $mail->SMTPSecure = 'ssl' ;            //Enable implicit TLS encryption
    $mail->Port       =  465 ;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bienestar@botellasdivino.com', 'SIBIS');
    $mail->addAddress($emaill);     //Add a recipient
   

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de cabana';
    $mail->Body  = '
    <html lang="es">
    <meta charset="UTF8" />
    <head>
    
      <title>Solicitud de cabana</title>
    </head>
    <body>
        <h2>MIGRACION COLOMBIA</h2>
        <p>Datos de la solicitud del funcionario</p>
        <div class="container mt-1">
        <div class="row justify-content-center">
        <div class="col-md-16">
        <div class="card">
        <div class="card-header">
        <table class="table">
        <thead>
        <tr>
         <th scope="col"><h4>SOLICITUD</h4></th>
        </tr>
        <thead>
          <tr>
            <th scope="col">Nombre completo. </th>
          </tr>
        </thead>
        <tbody>
          <tr>       
            <td><center>'.$nombre.'' . ''. $apellido.'</center></td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th scope="col">Numero de documento.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td><center>'.$documento.'</center></td>      
          </tr>
        </tbody>
        <thead>
          <tr>
            <th scope="col">Radicado.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td><center>'.$radicado.'</td></center>
          </tr>
        </tbody>
        </table>  
        <p><a href="https://sibis.botellasdivino.com/bienestar/ApartadoAdmin/ApartadoAdminCorreos/AdminRevisionDatos.php?radicado='.$radicado.'&documento='.$documento.'">Cambiar estado de solicitud </a></p>
            
        </div>
        </div>
        </div>
        </div>                                                 
        </div>
    </body>
    </html>
    ';
    
    $mail->send();
    
    $enviado=true;
    
} catch (Exception $e) {
  echo" Hubo un erro al enviar e mensaje: {$mail->ErrorInfo}";
}
?>