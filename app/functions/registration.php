<?php
include_once "connect.php";

$base = connect();
$query = mysqli_query($base, "SELECT * FROM users");
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);

$login = $_POST['login'];
$pass = $_POST['pass'];

foreach ($users as $user) {
	$regLogin = $user['login'];
	if ($regLogin == $login) {
		echo '<script>alert("Такой пользователь уже существует!");
			document.location.href = "http://leaderit.local/app/views/registration_view.php";</script>';
		break;
	} else {
		continue;
	}
}

mysqli_query($base, "INSERT INTO users (login, pass) VALUE ('$login', '$pass')");
echo '<script>alert("Вы успешно зарегистрированы!");
			document.location.href = "http://leaderit.local/app/views/login_view.php";</script>';