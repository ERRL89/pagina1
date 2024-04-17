<?php
    include('./config/config.php');
    include('./js/sendEmail.php');
    include "./resources/PHPMailer/src/Exception.php";
	include "./resources/PHPMailer/src/PHPMailer.php";
	include "./resources/PHPMailer/src/SMTP.php";

    $nombre = $_POST["nombre"];
    $calle = $_POST["calle"];
    $numero = $_POST["numero"];
    $colonia = $_POST["colonia"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    echo $nombre."<br>";
    echo $calle."<br>";
    echo $numero."<br>";
    echo $colonia."<br>";
    echo $telefono."<br>";
    echo $email."<br>";

     //CREA ARRAY PARA RECIPIENTS
     $recipients = array();   
     $nombreUsuario = $nombre;
     $emailUsuario =  $email;
     $dataUserMail = array("email" => "{$emailUsuario}", "name" => "{$nombreUsuario}");
     array_push($recipients, $dataUserMail);
 
     #ENVIO DE CORREO
     ##SE DEFINEN VARIABLES
     //$recipients = array(array("email" => "{$emailDestino}", "name" => "{$nombreDestino}"));
     $mailSubject = "Vidrio y Aluminio Los Dos Carnales";
     $mailPath = './templates/email/mail.php';
     $mailData = array(
        array("var_name" => "nombre", "var_val" => "{$nombre}") 
    );
    
 
     ##SE EJECUTA FUNCIÓN
     sendEmail($recipients, $mailSender, $mailSubject, $mailPath, $mailData, $mailHost, $mailUser, $mailPass);

?>