<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Отправка...</title>
</head>
<?php


$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);	


$address = "my@write.uz";
$sub = "PIZZA ITALIANO";


$mes = "Отзыв - PIZZA ITALIANO\n
Имя: $name \n
E-mail: $email\n
Cообщение:$message";


if (empty($bezspama))

{

    $from  = "From: $name <$email>";
    if (mail($address, $sub, $mes, $from, $bezspama)) {
        header('Refresh: 1; URL=http://yunusobodavtosavdo.uz/send.html');
        echo 'Отправка...';}
    else {
        header('Refresh: 3; URL=http://yunusobodavtosavdo.uz');
        echo 'Письмо не отправлено !';}
}
exit;
?>

<body>
</body>
</html>
