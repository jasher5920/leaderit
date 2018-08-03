<?php
if (isset($_POST['logout'])) {
	session_destroy();
	echo '<script>document.location.href = "http://leaderit.local/index.php";</script>';
}