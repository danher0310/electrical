<?php 
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$to = 'sales@electricalfl.com'; //correo de contacto

$asunto = 'Cliente requiere un Servicio'
$name = htmlspecialchars($_POST['name']);
$telefono = htmlspecialchars($_POST['phone']);
$correo = htmlspecialchars($_POST['email']);
$company = htmlspecialchars($_POST['company']);
$address = htmlspecialchars($_POST['direccion']);
$permiso = htmlspecialchars($_POST['permisos']);
$message = nl2br($_POST['message']);
$archivo = $_FILES['archivo'];
$nombre_archivo = $archivo['name'];
$ruta_archivo = $archivo['tmp_name'];

if (($name =='') || ($telefono =='') || ($correo='') ||  ($message)) {

	echo '<script>
                swal("Oops!", "Todos los campos son requeridos", "error");      
          </script>';
	
}else{

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '<p>El siguiente mensaje fué enviado a través del sitio web:</p> 
                   <p>'.$message.' y requiere de un permiso '.$permiso. '</p><br>
                   <p>Por: <strong>'.$name.'</strong></p> 
                   <p>Teléfono: '.$phone.'</p>
                   <p>E-mail: '.$email.'</p><
                   p>Compañia: '.$company.'</p>
                   <p>Direccion: '.$addres.'</p>';

    $mail ->addAttachment($nombre_archivo, $ruta_archivo);
    $mail->CharSet ='UTF-8';
    $mail->send();
    echo '<script>
                swal("Success!", "Gracias sus datos fueron enviados dentro de las proximas 24 horas estaremos contactantolo", "success");      
          </script>';

}


 ?>