<?php session_start();error_reporting(0);?>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <header>
      <div class="navbar navbar-default navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img height="30" class="center-block img-rounded" alt="Brand" src="https://raw.githubusercontent.com/Marioum/includes/master/eshop.png"></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="home.php">Home</a>
              </li>
              <li class="active">
                <a href="home.php">My account</a>
              </li>
            </ul>
            <color='red'=""></color='red'="">
          </div>
        </div>
      </div>
    </header>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <h1 class="text-center text-success">Welcome to our e-Shop</h1>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-danger">Get an account!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
<?php
if(isset($_POST['cin']))
    {
		$cin=$_POST['cin'];
		$lname=$_POST['lname'];
		$fname=$_POST['fname'];
		$login=$_POST['login'];
		$pwd=$_POST['pwd'];
		$city=$_POST['city'];


	$_SESSION['pwd']=$pwd;
	$_SESSION['fname']=$fname;
	$_SESSION['lname']=$lname;
	$_SESSION['login']=$login;
	$_SESSION['city']=$city;
	

mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);

	}
else
	{
		echo "no";
	}
$req="SELECT count(*) AS n FROM `mysite`.`users` WHERE cin=$cin";

$n=mysql_query($req) or die(mysql_error());
$row = mysql_fetch_assoc($n);
$num = $row['n'];

if($num == 1)
{
	?>
	<div class="alert alert-info">
	<strong>Info!</strong> Your Cin number is not available</div>

<?php

}
else
{
	?>
	<div class="alert alert-success">
	<strong>Success!</strong> Signing has been already done.</div>
<?php
$sql="INSERT INTO `mysite`.`users` (`cin`, `login`, `password`, `first_name`, `last_name`, `city`) VALUES ('$cin', '$login', '$pwd', '$fname', '$lname', '$city')";
$res=mysql_query($sql);

}

?>

	
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <form role="form" action="cnx.php" method="post">
                  <div class="col-lg-6">
                    <div class="well well-sm">
                      <strong>
                        <span class="glyphicon glyphicon-asterisk"></span>Required Field</strong>
                    </div>
                    <div class="form-group">
                      <label>Enter Cin</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="cin" placeholder="Enter Cin"
                        required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Enter First Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name"
                        required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Enter Last Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name"
                        required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Enter Login</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="login" placeholder="Enter Login"
                        required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="pwd" placeholder="Enter Password"
                        required="">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                      <br>
                      <div class="form-group">
                        <label>Enter Your City</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="city" placeholder="Enter Your City"
                          required="">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-asterisk"></span>
                          </span>
                        </div>
                        <br>
                        <br>
                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>