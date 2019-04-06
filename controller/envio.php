<?php
	$to      = Config::EMAIL_USER;
	$subject = 'Contado - Loja Soi';
	$message = 'Email de ' . $_GET['txtinputnome'] . "\r\n" .$_GET['txtinputarea'];
	$dest	 = $_GET['txtinputemail'];


	$headers = 'From: '. $dest;
	mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="reflesh" content="0; url=contato">