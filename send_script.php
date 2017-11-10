<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
//if (isset($_POST['name'])) {$name = $_POST['name'];} 
if (isset($_POST['phone'])) {$phone = $_POST['phone'];} 
if (isset($_POST['email'])) {$email = $_POST['email'];} 
if (isset($_POST['formData'])) {$formData = $_POST['formData'];} 

$to = "dragoonz@yandex.ru"; //Adress to
$sendfrom = "admin@norka72.ru"; //Adress from, may to be not active
$headers = "From: " . strip_tags($sendfrom) . "\r\n"; 
$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html;charset=utf-8 \r\n"; 
$subject = "Заявка с сайта"; 
$message = "$formData 
<b>Мейл пославшего:</b> $email 
<b>Телефон:</b> $phone"; 
$send = mail ($to, $subject, $message, $headers); 
/* if ($send == 'true') 
{ 
echo '<center> 

Спасибо за отправку вашего сообщения! 

</center>'; 
} 
else 
{ 
echo '<center> 

<b>Ошибка. Сообщение не отправлено!</b> 

</center>'; 
} 
} else { 
http_response_code(403); 
echo "Попробуйте еще раз"; 
} */
?>
