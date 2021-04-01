<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$text = $_POST['text'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$fio = urldecode($fio);
$email = urldecode($email);
$text = urldecode($text);

$fio = trim($fio);
$email = trim($email);
$text = trim($text);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>