<?php
session_start();

$log = fopen('../../log.txt', 'a+');
$user = $_SESSION['userID'];
$message = $_POST['message'];
$string = "$user"."//"."$message".PHP_EOL;
$write = fwrite($log, $string);
fclose($log);

header("Location: http://leaderit.local/app/views/chat_view.php");