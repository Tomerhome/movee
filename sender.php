<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];

	$to = "movee@argonweb.site"; 
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name 
    Телефон: $phone 
    Почта: $email"; 	
	mail($to, $subject, $msg, "From: $email ");


?>

<p> Форма отправлена </p>
