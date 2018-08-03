<?php
function connect()
{
	$host = 'localhost';
	$login = 'root';
	$pass = '26395345';
	$base = 'testDB';
	$connect = mysqli_connect($host, $login, $pass, $base);
	return $connect;
}