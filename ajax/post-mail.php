<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$term = $_POST['term'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($phone);
$term = htmlspecialchars($term);

$fio = urldecode($fio);
$email = urldecode($email);

$fio = trim($fio);
$email = trim($email);

$to = "rusoptim-info@yandex.ru";
$message = '
<html>
<body>
<center>
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Заявка на консультацию</b></td></tr>
 <tr>
  <td><b>ФИО</b></td>
  <td>'.$fio.'</td>
 </tr>
 <tr>
  <td><b>Телефон</b></td>
  <td><a href="tel:'.$phone.'">'.$phone.'</a></td>
 </tr>
 <tr>
  <td><b>Ключевое слово</b></td>
  <td>'.$term.'</td>
 </tr>
</table>
</center>
</body>
</html>';
$headers  = "Content-type: text/html; charset=utf-8\r\n";
mail($to, "Заявка на консультацию", $message, $headers);

?>
