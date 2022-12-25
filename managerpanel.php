<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Sanghamitra Caterer </title>
  </head>

  <style>

body{
  background-image: url("https://images.unsplash.com/photo-1509358271058-acd22cc93898?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3BpY2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1400px 700px;
  

}

.header11{
  text-align:center;
  color: white;
  font-family:Verdana, sans-serif;

}


</style>  

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php"> Menu</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="feedback.php"> Feedback</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER  PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>

<br>
<br>
<br>
<br>
<br>
<br>
    
<div class="header11">
   
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

    </div>
    
  
    		
</div>
</div>

<br>
<br>
<br>

    

<div class="header11" style="text-align: center; padding: 2px 300px 300px 300px;">

<div class="list-group">
  
  <a href="view_food_items.php" class="list-group-item ">View Food Items</a>
  <a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
  <a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
  <a href="view_order_details.php" class="list-group-item ">View Order & Details</a>
  <a href="Feedback_details.php" class="list-group-item  ">View Feedback Details</a>
  

</div>
</div>

<br>
<br>
<br>
<br>
