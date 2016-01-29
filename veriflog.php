<?php session_start();?>
<?php
if(isset($_POST['login'])&& isset($_POST['pwd']))
	{

$pwd=$_POST['pwd'];
$login=$_POST['login'];
mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);                                             


 $req="select login from `mysite`.`users` where  login='".$_POST['login']."' ";
  $res=mysql_query($req);
  if($res === FALSE) { 
  die(mysql_error());}
  if(mysql_num_rows($res)==0)
   {header('location:signin.php');
   }
  else
   { $req="select * from `mysite`.`users` where login='".$login."'";
       $res=mysql_query($req);
	   $row=mysql_fetch_array($res);
     if($row['password']==$pwd)
	 {
	 header('location:myaccount1.php');
	 $_SESSION['pwd']=$pwd;
     $_SESSION['login']=$row['login'];
	 }
}
	}
	else echo "error";
 
 
?>