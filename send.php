<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}


/* Сюда впишите свою эл. почту */
 $address = "intellect.learning.2019@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: Вопрос о курсе  \nТелефон: $email\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

header("Location: /"); /* Для возврата на главную */
?>