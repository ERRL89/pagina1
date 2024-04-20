<?php
    include('./config/config.php');
    include('./js/sendEmail.php');
    include "./resources/PHPMailer/src/Exception.php";
	include "./resources/PHPMailer/src/PHPMailer.php";
	include "./resources/PHPMailer/src/SMTP.php";

    $nombre = $_POST["nombre"];
    $colonia = $_POST["colonia"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $optionProject = $_POST["optionProject"];


     //CREA ARRAY PARA RECIPIENTS
     $recipients = array();   
     $nombreUsuario = "Edson Roberto Rubio Lopez";
     $emailUsuario =  "ing.edson.rubio@outlook.com";
     $dataUserMail = array("email" => "{$emailUsuario}", "name" => "{$nombreUsuario}");
     array_push($recipients, $dataUserMail);
 
     #ENVIO DE CORREO
     //$recipients = array(array("email" => "{$emailDestino}", "name" => "{$nombreDestino}"));
     $mailSubject = "Un cliente requiere tu atencion";
     $mailPath = './templates/email/mail.php';
     $mailData = array(
        array("var_name" => "nombre", "var_val" => "{$nombre}"),
        array("var_name" => "colonia", "var_val" => "{$colonia}"),
        array("var_name" => "telefono", "var_val" => "{$telefono}"),
        array("var_name" => "email", "var_val" => "{$email}"),
        array("var_name" => "optionProject", "var_val" => "{$optionProject}"), 
    );
    
 
     ##SE EJECUTA FUNCIÓN
     sendEmail($recipients, $mailSender, $mailSubject, $mailPath, $mailData, $mailHost, $mailUser, $mailPass);   
?>

     <div class="container d-flex justify-content-center align-items-center">
        <h4>Correo enviado correctamente</h4>
     </div>