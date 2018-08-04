<?php
session_start();
$user = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>Чат - <?php echo $user; ?></title>
</head>
<body>
<div class="chat" id="chat">
	<div class="info">
		<form action="../functions/logout.php" method="post">
			<button type="submit" name="logout" class="btn btn-danger logout">Выход</button>
			<br>
		</form>
		<h3>Чат - <?php echo $user; ?></h3><br>
		<form action="../functions/chat.php" method="POST">
			<input name="message" title="message" class="myinput">
			<button type="submit" class="btn btn-success">Отправить</button>
		</form>
		<br>
	</div>
	<?php
	$log = file("../../log.txt");
	foreach ($log as $string) {
		$part = explode('//', $string);
		$loginUser = $part[0];
		$messageUser = $part[1];
		if ($loginUser == $user) {
			echo "<div class='bg-primary message'>";
		} else {
			echo "<div class='bg-info message'>";
		}
		echo "&nbsp;<b>$loginUser</b><br>&nbsp;$messageUser</div><br>";
	}
	?>
</div>
</body>
</html>
<!--<script>-->
<!--	$(function () {-->
<!--		show();-->
<!--		setInterval('show()', 1000);-->
<!--	});-->
<!--</script>-->