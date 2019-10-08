<?php

session_start();

	$hostname='localhost';
	$user = 'root';
	$password = '';
	$mysql_database = 'Fashion';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("Fashion", $db);


?>