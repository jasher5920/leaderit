<?php
include_once "connect.php";

$base = connect();
$query = mysqli_query($base, "SELECT * FROM users");
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);

$login = $_POST['login'];
$pass = $_POST['pass'];

foreach ($users as $user) {
	$regLogin = $user['login'];
	$regPass = $user['pass'];
	if ($login == $regLogin
		&& $pass == $regPass
	) {
		session_start();
		$_SESSION['userID'] = $login;
		$_SESSION['password'] = $pass;
		header("Location: http://leaderit.local/app/views/chat_view.php");
		break;
	}
}

echo '<script>alert("Неверный логин или пароль!");
			document.location.href = "http://leaderit.local/app/views/login_view.php";</script>';
