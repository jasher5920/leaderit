<?php
function connect()
{
	$host = 'localhost';
	$login = 'root';
	$pass = '';
	$base = '';
	$connect = mysqli_connect($host, $login, $pass, $base);
	return $connect;
}