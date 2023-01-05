<meta http-equiv='refresh' content='10'>
<meta charset="UTF-8" />
<!-- Начался блок PHP -->
<?php

$email = 'madinaPhoto13@gmail.com';
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "Имя: $name \nPhone: $phone \nТема: $text \nТекст: $text";
// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail($email, $name, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// Если отправка прошла успешно — так и пишем
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}
?>