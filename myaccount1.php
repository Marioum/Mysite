<?php session_start();
		
    $_SESSION['login']=$login;
	$_SESSION['pwd']=$pwd;
mysql_connect ('localhost', 'root', '') or die($connect_error);
$conn = mysql_select_db ('mysite') or die($connect_error);
?>
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
                <a href="home1.php">Home</a>
              </li>
              <li class="active">
                <a href="myaccount.php">My account</a>
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
            <h1 class="text-center text-success">Welcome to your account</h1><br><br><h2 class="text-center text-success">You can search and add new announcements! <br><br> You can also save announcements you find useful and interesting<br><br> Enjoy navigation on our e-Shop!</h2>
			
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center"></p>
            <h3>
              <!--?php $req="select first_name from users where password='$pwd'"; $res=m
              ysql_query($req); // run the query and get the result object. if (!$res)
              { // check for errors. echo 'Could not run query: ' . mysql_error(); exit;
              } $row=m ysql_fetch_row($res); // get the single row. echo "Hello ".$row[0];
              // display /*$res=mysql_query($req); echo $res; var_dump($res);*/ ?-->
            </h3>
            <p></p>
          </div>
        </div>
        <br>
      </div>
    </div>
    <div class="section text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="col-md-11">
              <a href="announcement.php"><i class="fa fa-5x fa-cart-arrow-down fa-fw pull-left text-danger"></i></a>
              <h2 class="text-danger text-left">My annoucements</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-11 text-left">
              <a href="annouce.php"><i class="fa fa-4x fa-database fa-flip-horizontal fa-fw pull-left text-danger"></i></a>
              <h2 class="text-danger">My saves</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12">
              <a href="addannouce.php"><i class="fa fa-5x t-arrow-down fa-fw pull-left text-danger fa-cart-plus"></i></a>
              <h3 class="text-danger text-left">Add announcement</h3>
            </div>
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
    <br>
    <br>
    <!--?php include 'connexion.php'; ?-->
    <footer class="container-fluid text-center">
      <a name="footer"></a>
    </footer>
  </body>

</html>