<?php
	header('Content-type: text/html; charset=utf-8');
	error_reporting(0);   

if(!empty($_POST['send'])) {

	$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
	$tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    $email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100);
    $message = substr(htmlspecialchars(trim($_POST['message'])), 0, 3000);
	
	$ip = $_SERVER['REMOTE_ADDR'];

	$Nzakaz = rand(10000, 99999);

	$mess  = "Имя: <b>".$name."</b><br />";
	$mess .= "Телефон: <b>".$tel."</b><br />";
    $mess .= "Email: <b>".$email."</b><br />";
    $mess .= "Сообщение: <b>".$message."</b><br />";
	
	$theme = "Заявка Z".$Nzakaz;

	mail("voprosti@mail.ru", $theme, $mess, "From: mysite.com <mymail@mail.ru>\nContent-Type: text/html;\n charset=utf-8\nX-Priority: 0");
	?>
	<div id="papa">
	<h3>Спасибо за заявку!</h3>
	</div>
	<style>
	    div#popup h3{color: #fff; font-size: 21pt; font-weight: bold;  text-align: center;	margin-top: 130px;}
		div#popup {  width: 405px; height: 309px; background: green}
	</style>
 <?  
    }
else {
	
	echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
	
}
	
?>