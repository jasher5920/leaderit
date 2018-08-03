<?php

include_once "../db/connect.php";

$base = connect();
$query = mysqli_query($base, "SELECT * FROM users");
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>Регистрация</title>
</head>
<body>
<div class="auth">
	<h3>Чат - регистрация</h3><br>
	<form method="POST" action="../db/registration.php">

	</form>
</div>
</body>
</html>
