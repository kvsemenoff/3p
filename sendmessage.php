<?php
$to = "test@yandex.ru ";
$phone = $_POST['phone'];
$uname = $_POST['uname'];
$text = $_POST['text'];
$email = $_POST['email'];
$address = $_POST['address'];
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Адресl:</strong> ".$address."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$text."</p>\r\n";
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);
?>