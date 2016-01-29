<?php
session_start();
$_SESSION = array();
header("location:home.php");
session_destroy();



?>