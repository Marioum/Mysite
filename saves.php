<?php session_start();
		
    $_SESSION['login']=$login;
	$_SESSION['pwd']=$pwd;
mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);
?>