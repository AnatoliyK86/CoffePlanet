<?php
	$address = 'kozachenkoav@gmail.com';
	$subject = 'Заявка от ';
	$name = $_POST['firstname'];
	$tel = $_POST['tel_number'];
	$subject = $subject . $tel;
	$message = 'Пришла новая заявка от ' . $name . '. Телефон клиента: ' . $tel;
	mail($address, $subject, $message);
	// header("Location: http://s63102ke.beget.tech/");
	// echo 'OK';
	
	exit;
?>