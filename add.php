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
      <div class="container"><h1 class="text-center text-danger">Announcement added!</h1></div>
    </div>
	<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
			<?php
				$titre=$_POST['titre'];
				$cat=$_POST['cat'];
				
				$pic=$_FILES['pic']['name'];
				$prix=$_POST['prix'];
				$cn=$_POST['cn'];
				$fn=$_POST['fname'];
				$ln=$_POST['lname'];
				$nb=$_POST['phnb'];
				$add=$_POST['add'];
			$req="INSERT INTO `mysite`.`annonce` (`titre`, `categorie`, `picture`, `prix`, `cn`, `F_name`, `L_name`, `ph_nb`, `address`) VALUES ('$titre', '$cat', '$pic', '$prix', '$cn', '$fn', '$ln', '$nb', '$add')";
			mysql_query($req);
			
			echo"<form name='f1' method='post'>";
   echo" <section id='content'>";
echo"        <div class='bg-2'>";
        	echo"<div class='main'>";
            	echo"<div class='wrapper p4'>";
                	
					
					echo"<div class='col-1'>";
                    	echo"<strong class='title-3'><h3 class='text-success'>Category: </h3>".$cat."</strong><br><br>";
                       echo" <strong class='title-3'><h3 class='text-success'>Title: </h3>".$titre. "</strong><br><br>";
                     

                    echo"<div class='col-1'>";
                   echo" <strong class='title-3'><h3 class='text-success'>Price: </h3>".$prix. " </strong><br><br>";
                        
                    echo"</div>";
					
                    echo"<div class='col-2'>";
                    	echo"<strong class='title-3'><h3 class='text-success'>Picture:</h3><img src='images/".$pic."'/></strong><br><br>";
                       echo"<strong class='title-3'><h2 class='text-success'>Your contact: </h2></strong><br><br>";
                    echo"</div>";
                echo"</div>";
				
                echo"<div class='wrapper p4'>";
                	echo"<div class='col-1'>";
                    	echo"<strong class='title-3'><h3 class='text-success'>First name: </h3>".$fn."</strong><br><br>";
                        echo"<strong class='title-3'><h3 class='text-success'>Last name: </h3>".$ln."</strong><br><br>";
                        echo"<strong class='title-3'><h3 class='text-success'>Phone number: </h3>".$nb."</strong><br><br>";
                    echo"</div>";
                    echo"<div class='col-1'>";
                    	echo"<strong class='title-3'><h3 class='text-success'>Address: </h3>".$add. "</strong><br><br>";
                        echo"<strong class='title-3'><h3 class='text-success'>Cin number: </h3>".$cn. "</strong><br><br>";
                        
                    echo"</div>
                    <div class='col-2'>
                    	<figure class='indent-bot'></figure>
                        <strong class='title-3'></strong>";
                       
                    echo"</div>
                </div>
            </div>
        </div>
    </section>
	</form>";
			

			?>

		  </div>
        </div>
      </div>
    </div>
  </body>

</html>
