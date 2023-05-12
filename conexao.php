<?php 
	$hostname = "localhost";
	$database = "aula";
	$username = "root"; 
	$password = "usbw";
	$con = mysql_connect($hostname,$username,$password)
	or die (mysql_error()."Erro ao tentar conectar-se ao banco");
	mysql_select_db($database, $con);
 ?>