<?php
if (isset($_POST['logout'])) {
	session_unset();
	session_destroy();
	header("Location: http://leaderit.local/index.php");
}