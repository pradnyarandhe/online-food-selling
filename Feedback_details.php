<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | sanghamitra Caterer </title>
  </head>


  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>


<style>

.header19{
  text-align:center;
  color: black;
  font-family:Verdana, sans-serif;

}


.header23{
  text-align: center;
  color: black;
  font-family:Verdana, sans-serif;
 

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
          <a class="navbar-brand" href="index.php"> Sanghamitra Caterer</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="Feedback.php">Feedback</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>


    <br>
<br>
<br>
<br>

    
<div class="header19">
   
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

    </div>
    
  
    		
</div>
</div>

<br>
<br>
<br>

    

<div class="header19" style="text-align: center; padding: 2px 300px 300px 300px;">

<div class="list-group">
  
  <a href="view_food_items.php" class="list-group-item ">View Food Items</a>
  <a href="add_food_items.php" class="list-group-item  ">Add Food Items</a>
  <a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
  <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
  <a href="Feedback_details.php" class="list-group-item  active">View Feedback Details</a>
  

</div>
</div>

<div class="header23">
     <h3>Customer Feedback</h3>
</div>

<br>
<br>

<?php

// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

<table class="table table-striped" style="width:70%, text-align: center, padding: 2px 300px 300px 300px;">
    <thead class="thead-dark">
      <tr>
      <th> Name</th>
      <th> Email </th>
      <th> Mobile </th>
      <th> Subject </th>
      <th> Message </th>
      
      </tr>
    </thead>
    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      
    
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Email"]; ?></td>
      <td><?php echo $row["Mobile"]; ?></td>
      <td><?php echo $row["Subject"]; ?></td>

      <td><?php echo $row["Message"]; ?></td>
      
      
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
  <?php 
} 
else
{ 
  ?>

<h4><center>0 RESULTS</center> </h4>

<?php } ?>

      </form>

      
</br>
</br>

</body>
</html>