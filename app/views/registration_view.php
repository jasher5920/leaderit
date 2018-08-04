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
	<form method="POST" action="../functions/registration.php">
		Логин:<br>
		<input title="login" name="login" required><br>
		Пароль:<br>
		<input title="pass" name="pass" type="password" required><br><br>
		<button type="submit" class="btn btn-success">Зарегистрироваться</button>
		<a href="../../index.php" class="btn btn-default">Отмена</a>
	</form>
</div>
</body>
</html>
