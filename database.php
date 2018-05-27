<?php
	error_reporting(0);
	$db_host = '88.212.247.52';
	$db_user = 'xzetxru2';
	$db_password = 'Fhntvrf131420';
	$db_name = 'xzetxru2_test';
	
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$link) {
    	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
		
    echo "<p>Вы подключились к MySQL!</p>";

?>