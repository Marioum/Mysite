<?php session_start();
		
    $_SESSION['login']=$login;
	$_SESSION['pwd']=$pwd;
mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
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
                <a href="home1.php">Home</a>
              </li>
              <li class="active">
                <a href="myaccount1.php">My account</a>
              </li>
			  <li class="active">
                <a href="logout.php">Logout</a>
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
            <h1 class="text-center text-success">Welcome to our e-Shop</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center"></p>
            <h3></h3>
            <p></p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-danger">
              <p class="text-center">You can search and place announcements! <br><br> You can also save announcements you find useful and interesting<br><br> Enjoy navigation on our e-Shop!</p>
              <br>
             </h3>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="panel-heading">
              <h2 class="text-success">
                <center>Home</center>
              </h2>
            </div>
            <a href="hm.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/home2.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-4">
            <div class="panel-heading">
              <h2 class="text-success">
                <center>Cars</center>
              </h2>
            </div>
            <a href="car.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/car1.png" class="img-responsive"></a>
          </div>
          <div class="col-md-4">
            <div class="panel-heading">
              <h2 class="text-success">
                <center>Home appliance</center>
              </h2>
            </div>
            <a href="ha.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/home1.jpg" class="center-block img-circle img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="panel-heading">
              <h2 class="text-success">
                <center>Phones</center>
              </h2>
            </div>
            <a href="ph.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/tel1.png" class="center-block img-responsive img-thumbnail"></a>
          </div>
          <div class="col-md-4">
            <div class="panel-heading">
              <h2 class="text-success">
                <center>Computers</center>
              </h2>
            </div>
            <a href="pc.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/pc3.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-4">
            <h2 class="text-success">
              <center>Others</center>
            </h2>
            <a href="oth.php"><img src="https://raw.githubusercontent.com/Marioum/includes/master/interr.JPG" class="img-circle img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </body></html>