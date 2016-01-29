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
                <a href="myaccount.php">My account</a>
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
            <h1 class="text-center text-success">Welcome to your account!</h1>
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
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
		 <?php $req="select * from `mysite`.`annonce` where categorie='other'";
 $res=mysql_query($req);
 echo"<center><table border=1>";
 if($res === FALSE) { 
    die(mysql_error());}
 while($row=mysql_fetch_array($res))
 {
    
   echo "<tr><td>";
   echo" <section id='content'>";
     //echo"<div class='bg-2'>";
       // 	  echo"<div class='main'>";
            	  echo"<div class='wrapper margin-bot'>";
                	  echo"<h3> Title:".$row['titre']."</h3><br>";
                      echo"<time datetime='2011-06-07' class='tdate-2 indent-bot'> Category:".$row['categorie']."<br>Address:".$row['address']."<br>Price:".$row['prix']."dt<br>Phone:".$row['ph_nb']."</time>";
                      echo"<div class='wrapper'></td>";
                    	echo"<td><figure class='img-indent3 frame'><img src='images/".$row['picture']."'/></figure>";
                         echo" <div class='extra-wrap'>";
                         echo" </div>";
                   //  echo" </div>";
                 //echo" </div></td></tr>";
				 }
		echo"</table></center>";
		  ?>
		  </div>
        </div>
      </div>
    </div>
    <footer class="container-fluid text-center">
      <a name="footer"></a>
    </footer>
  </body>

</html>