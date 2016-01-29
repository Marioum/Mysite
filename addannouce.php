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
            <h1 class="text-center text-success">Add Your Announcement!</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center"></p>
            <h3>
              <!--?php if(isset($_POST[ 'login'])&& isset($_POST[ 'pwd'])) { $login=$_POST[
              'login']; $pwd=md5($_POST[ 'pwd']); $_SESSION[ 'login']=$login; $_SESSION[
              'pwd']=$pwd; mysql_connect ( 'localhost', 'root', '') or die($connect_error);
              $conn=m ysql_select_db ( 'mysite') or die($connect_error); if($conn==t
              rue) echo "cnct"; $req="select first_name from users where password='$pwd'"
              ; $res=m ysql_query($req); // run the query and get the result object.
              if (!$res) { // check for errors. echo 'Could not run query: ' . mysql_error();
              exit; } $row=m ysql_fetch_row($res); // get the single row. echo $row[0];
              // di /*$res=mysql_query($req); echo $res; var_dump($res);*/ } else { echo
              "no"; } ?-->
            </h3>
            <p></p>
          </div>
        </div>
        <br>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <form role="form" action="add.php" method="post" enctype="multipart/form-data">
          <div class="col-lg-6">
            <div class="well well-sm">
              <strong>
                <span class="glyphicon glyphicon-asterisk"></span>Required Field</strong>
            </div>
            <div class="form-group">
              <label>Title</label>
              <div class="input-group">
                <input type="text" class="form-control" name="titre" placeholder="Enter Title"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
			
              <label>Category</label>
              <br>
              <br>
              <input type="radio" name="cat" value="home">Home
              <br>
              <br>
              <input type="radio" name="cat" value="car">Car
              <br>
              <br>
              <input type="radio" name="cat" value="happ">Home Appliances
              <br>
              <br>
              <input type="radio" name="cat" value="phone">Phone
              <br>
              <br>
              <input type="radio" name="cat" value="pc">Computer
              <br>
              <br>
              <input type="radio" name="cat" value="other">Others
              <br>
              <br>
			 
            </div>
               <div class="form-group">
              <label>Picture</label>
              <div class="input-group">
                <input type="file" name="pic">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Price</label>
              <div class="input-group">
                <input type="text" class="form-control" name="prix" placeholder="Enter Price"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <label>
              <h4>Enter your contact</h4>
            </label>
            <br>
            <div class="form-group">
              <label>Cin</label>
              <div class="input-group">
                <input type="number" class="form-control" name="cn" placeholder="Enter Cin number"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>First name</label>
              <div class="input-group">
                <input type="text" class="form-control" name="fname" placeholder="Enter Your First Name"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Last name</label>
              <div class="input-group">
                <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <div class="input-group">
                <input type="text" class="form-control" name="phnb" placeholder="Enter phone number"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
			<div class="form-group">
              <label>Address</label>
              <div class="input-group">
                <input type="text" class="form-control" name="add" placeholder="Enter Your Address"
                required="">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
              </div>
            </div>
            <input type="submit" name="submit" id="submit" value="Add" class="btn btn-info pull-right">
          </div>
        </form>
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
    </div>
  </body>

</html>