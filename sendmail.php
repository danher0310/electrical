<?php 

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new  PHPMailer;

$to = 'sales@electricalfl.com'; //correo de contacto

//datos recogicos en el formulario de contacto
$asunto = 'Cliente potencial';
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$message = nl2br($_POST['message']);

if(($name =='') || ($email == '') || ($phone == '') || ($message == '')) {

	echo '<script>
                swal("Oops!", "Todos los campos son requeridos", "error");      
          </script>';
}
else{
	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '<p>El siguiente mensaje fué enviado a través del sitio web:</p> 
                   <p>'.$message.'</p><br>
                   <p>Por: <strong>'.$name.'</strong></p> 
                   <p>Teléfono: '.$phone.'</p>
                   <p>E-mail: '.$email.'</p>';

    $mail->CharSet ='UTF-8';
    $mail->send();
    echo '<script>
                swal("Success!", "Gracias sus datos fueron enviados dentro de las proximas 24 horas estaremos contactantolo", "success");      
          </script>';

}








 ?>