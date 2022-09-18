<?php
$fio = $_POST['fio'];
$number = $_POST['number'];
$date1  = $_POST['date1'];
$date2 = $_POST['date2'];

$fio = htmlspecialchars($fio);
$number = htmlspecialchars($number);
$date1  = htmlspecialchars($date1);
$date2 = htmlspecialchars($date2);

$fio = urldecode($fio);
$number = urldecode($number);
$date1  = urldecode($date1);
$date2 = urldecode($date2);

$fio = trim($fio);
$number = trim($number);
$date1  = trim($date1);
$date2 = trim($date2);

echo $fio;
echo "<br>";
echo $number;
echo "<br>";
echo $date1;
echo "<br>";
echo $date2;

if (mail("prozorov_g_a@mail.ru", "Заказ с сайта", "ФИО:".$fio.". Номер: ".$number". Заказ: ".$date1" - ".$date2 , "From: gap6@tpu.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
} ?>