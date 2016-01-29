<?php session_start();?>
<?php
if(isset($_POST['login'])&& isset($_POST['pwd']))
	{
		$login=$_POST['login'];
		$pwd=$_POST['pwd'];
        $_SESSION['login']=$login;
		$_SESSION['pwd']=$pwd;
							
mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);
 if($conn == true)
echo "cnct";	 
$req="select first_name from users as n where  pwd='$pwd'";
$res=mysql_query($req);
$row = mysql_fetch_array($res);
     echo "Hello".$row['n'];

	}
	else
	{
		echo "no";
	}
?>