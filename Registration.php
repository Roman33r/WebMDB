<?php
$mysql = new mysqli('localhost','root','root','news');
if (!$mysql) { die ('Connection error: ' . mysql_error()); }

$FirstName = filter_var(trim($_POST['FirstName']), FILTER_SANITIZE_STRING);
$LastName = filter_var(trim($_POST['LastName']), FILTER_SANITIZE_STRING);
$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
$Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);
$Login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
//$Password = md5($Password);
$mysql->query("INSERT INTO `users` (`Email`,`FirstName`,`LastName`,`Password`,`Login`) VALUES ('$Email','$FirstName','$LastName','$Password','$Login')");

$mysql->close();

header('Location: /LOVENEWS');
?>