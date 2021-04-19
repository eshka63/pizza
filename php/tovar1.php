<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="2; url=http://write.uz/evt-laba/send.html" />
<title>Отправка...</title>
</head>
<?php


$name = htmlspecialchars($_POST["name"]);
$num = htmlspecialchars($_POST["num"]);
$adr = htmlspecialchars($_POST["adr"]);
$sizepz = htmlspecialchars($_POST["sizepz"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);	


$address = "my@write.uz";
$sub = "PIZZA ITALIANO";


$mes = "Заказ - 1+1 Бургер-пепперони\n
Имя: $name \n
Номер: $num\n
Адрес доставки: $adr\n
Размер пиццы: $sizepz"
;


if (empty($bezspama))

{	

    $from  = "From: $name <$email>";
    if (mail($address, $sub, $mes, $from, $bezspama)) {
        header("refresh: 3; url = http://write.uz/evt-laba/");
        echo 'Отправка...';}
    else {
        header("refresh: 3; url = http://write.uz/evt-laba/");
        echo 'Письмо не отправлено !';}
}
exit;
?>

<body>
</body>
</html>
