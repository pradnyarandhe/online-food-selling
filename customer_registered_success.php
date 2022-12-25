<html>

  <head>
    <title> Manager Login | Sanghamitra Caterer</title>
  </head>

  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>


  <style>

body{
  background-image: url("https://images.unsplash.com/photo-1509358271058-acd22cc93898?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3BpY2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1400px 700px;
  

}
      
.header9
{
    text-align: center;
    color: white;
 }


      </style>
  <body>

  
   
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Sanghamitra Caterer</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="menu.php"> Menu</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

    
<?php

require 'connection.php';
$conn = Connect();



$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);
$email = $conn->real_escape_string($_POST['email']);




$query = "INSERT into customer (username,fullname,contact,address,password,email) values('" . $username . "','" . $fullname . "','" . $contact. "','" . $address ."','" . $password ."','" . $email . "')";
$success = $conn->query($query);




?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="header9">
		<h2> <?php echo "Welcome $fullname!" ?> </h2>
		
        
		<h3>Login Now from <a href="customerlogin.php">  <br> <h4>HERE</h4></a></h3>
	</div>
</div>

    </body>
</html>