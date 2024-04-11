<?php
	///////////////// FUNCIÓN PARA ENVIAR EMAIL  /////////////////////

	#USO DE NAMESPACES NECESARIOS PARA USAR PHPMAILER
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	#

	#ESTRUCTURA DE COMO SE DEBEN DE MANDAR LOS ARGUMENTOS
	# $recipients => array(array()^n); -- Ejemplo ---> array(array('email' => 'ejemplo@acil.mx', 'name' => 'nombre_ejemplo'))

	# $sender => array(array()^n); -- (ESTE ARGUMENTO YA ESTA CONFIGURADO EN EL ARCHIVO CONF.PHP)

	# $mailSubject => string;

	# $mailPath => string;

	# $mailData => array(array()^n) -- Ejemplo ---> array(array('var_name' => 'cerrador', 'var_val' => $cerrador)) 
	# *Los var_name deben ser los nombres de las variables que necesita tu plantilla de correo*

	# $mailHost => string; -- (ESTE ARGUMENTO YA ESTA CONFIGURADO EN EL ARCHIVO CONF.PHP) 

	# $mailUser => string; -- (ESTE ARGUMENTO YA ESTA CONFIGURADO EN EL ARCHIVO CONF.PHP)

	# $mailPass => string; -- (ESTE ARGUMENTO YA ESTA CONFIGURADO EN EL ARCHIVO CONF.PHP)

	# $attachments => array(); -- Ejemplo ---> array('foto_ejemplo1.jpg', '../icons/foto_ejemplo2.png') -- (PARAMETRO OPCIONAL)

	function sendEmail($recipients, $sender, $mailSubject ,$mailPath, $mailData, $host, $user, $password, $attachments = array()){
		
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try 
		{
			//Server settings
			$mail->isSMTP(); //Send using SMTP
			$mail->Host       = $host; //Set the SMTP server to send through
			$mail->SMTPAuth   = true; //Enable SMTP authentication
			$mail->Username   = $user; //SMTP username
			$mail->Password   = $password; //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
			$mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			$mail->CharSet    = "UTF-8";                       

			//Recipients (Destinatarios y remitente)
			#Remitente
			$mail->setFrom($sender['email'], $sender['name']);
			#

			#Destinatarios
			foreach($recipients as $recipient){
				$mail->addAddress($recipient['email'], $recipient['name']);
			}
			#

			//Attachments (Archivos adjuntos)
			#Archivos
			if(count($attachments) > 0){
				foreach ($attachments as $attachment) {
					$mail->addAttachment($attachment);
				}
			}
			#

			//Content (Contenido)
			#Se instancian variables necesarias para el correo
			foreach($mailData as $data){
				${$data['var_name']} = $data['var_val']; 
			}
			#

			#Se añade cuerpo de correo
			require($mailPath);
			#

			//Content
			$mail->isHTML(true);  //Set email format to HTML
			$mail->Subject = $mailSubject;
			$mail->Body    = $message;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			
		} catch (Exception $e) {
			throw new Exception("Ocurrió un error al enviar correo: " . $e->getMessage());
		}

	}

	///////////////// FUNCIÓN PARA ENVIAR EMAIL  /////////////////////

?>