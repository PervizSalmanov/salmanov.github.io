<?php 
if($_POST)
{
$to = "voprosti@mail.ru";
$from = 'voprosti@mail.ru';
$subject = "Ваше сообщение"; 
 
$message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['phone'].'; Email: '.$_POST['email'].';';
 
$headers  = "Content-type: text/html; charset=UTF-8 \r\n"; 
$headers .= "From: <voprosti@mail.ru>\r\n"; 
 
$result = mail($to, $subject, $message, $headers);
 
 
if ($result){
    echo "<center><img src='images/success-icon.png'></center>";
    }
else {echo" <p>Сообщение не отпралено</p> ";
    }
}
?>
<style type="text/css">
	img{margin-top: 200px;}
</style>
<script type="text/javascript">
	history.back(1024);
</script>
