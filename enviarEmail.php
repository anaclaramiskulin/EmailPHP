<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

//VARIAVEIS COM OS DADOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

try {
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'anaclarabarcellamiskulin2107@gmail.com';
	$mail->Password = 'senha123';
	$mail->Port = 587;

	$mail->setFrom('anaclarabarcellamiskulin2107@gmail.com');
	$mail->addAddress($email);


	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail';
	$mail->Body = $comentario;
	$mail->AltBody = $comentario;

	if($mail->send()) {
        echo '<script>alert("Email enviado com sucesso");
		location.href="contato.php"</script>';
	} else {
        echo '<script>alert("Email nao enviado");
		location.href="contato.php"</script>';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}