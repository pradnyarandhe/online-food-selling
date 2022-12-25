<html>

  <head>
    <title> Home | SANGHAMITRA CATERER </title>
  </head>

<style>

body{
  background-image: url("https://images.unsplash.com/photo-1509358271058-acd22cc93898?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3BpY2VzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1400px 700px;
  

}

.header4{
    text-align:center;
    color: white;
    font-family:Verdana, sans-serif;

}


#myInput {
  display: block;
  margin: 0 auto;
  width: 50%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */

}

#myTable {

  width: 50%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
  color: white;
  font-family:Verdana, sans-serif;
  padding: 2px 300px 300px 300px;
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 3px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
 
}


.center {
  margin-left: auto;
  margin-right: auto;
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


<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
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
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="menu.php">Menu</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="Feedback.php">Feedback</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

   <br>
   <br>
   <br>

<div class= "header4">
    <h3>  || Our Menu ||<h3>

</div>

<br>
<br>
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for food.." >

<table id="myTable" class="center" >
  <tr class="header">
    <th style="width:50%;">Food</th>
    <th style="width:50%;">Price</th>
   
  </tr>
  <tr>
    <td>Pav Bhaji</td>
    <td>110/-</td>
    
  </tr>
  <tr>
    <td>Paneer Tikka </td>
    <td>90/-</td>

  </tr>
  <tr>
    <td>Paneer Masala</td>
    <td>90/-</td>
  </tr>
  <tr>
    <td>Palak Paneer</td>
    <td>90/-</td>
</tr>
<tr>
    <td>Channa Masala</td>
    <td>45/-</td>
  </tr>
  <tr>
    <td>Aloo Gobi</td>
    <td>50/-</td>
  </tr>

  <tr>
    <td>Veg-kolhapuri</td>
    <td>60/-</td>
  </tr>
  <tr>
    <td>Mix-Veg</td>
    <td>50/-</td>
  </tr>

  <tr>
    <td>Bhendi Fry</td>
    <td>60/-</td>
  </tr>
  <tr>
    <td>Butter Chicken</td>
    <td>120/-</td>
  </tr>
  <tr>
    <td>Chicken Masala</td>
    <td>120/-</td>
  </tr>
  <tr>
    <td>Mutton Curry</td>
    <td>170/-</td>
  </tr>
  <tr>
    <td>Plane Rice </td>
    <td>40/-</td>
  </tr>
  <tr>
    <td>Vegetable Fried Rice</td>
    <td>70/-</td>
  </tr>
  <tr>
    <td>Rajma Chawal</td>
    <td>90/-</td>
  </tr>
  <tr>
    <td>Manchurian Rice </td>
    <td>70/-</td>
  </tr>

  <tr>
    <td>Jeera Rice</td>
    <td>70/-</td>
  </tr>
  <tr>
    <td>Chicken Biryani</td>
    <td>130/-</td>
  </tr>

  <tr>
    <td>Egg Birayni</td>
    <td>90/-</td>
  </tr>
  <tr>
    <td>Prawns Biryani  </td>
    <td>180/-</td>
  </tr>

  <tr>
    <td>Plain Roti</td>
    <td>17/-</td>
  </tr>
  <tr>
    <td>Bajra Roti </td>
    <td>20/-</td>
  </tr>
  <tr>
    <td>Jowar Roti</td>
    <td>24/-</td>
  </tr>
  <tr>
    <td>Chawal Roti </td>
    <td>25/-</td>
  </tr>
  <tr>
    <td>Gulab Jamun</td>
    <td>50/-</td>
    <td>1kg </td>
  </tr>
  <tr>
    <td>Kaju Katli </td>
    <td>180/-</td>
    <td>1/2 kg </td>
  </tr>

  <tr>
    <td>Jalebi</td>
    <td>60/-</td>
    <td>1kg </td>
  </tr>
  <tr>
    <td>Besan Ladoo </td>
    <td>70/-</td>
    <td> 1kg </td>
  </tr>
  <tr>
    <td>Boondi Ka Ladoo</td>
    <td>80/-</td>
    <td>1kg </td>
  </tr>
  <tr>
    <td>Gajar Halwa </td>
    <td>30/-</td>
    <td>1/2 kg </td>
  </tr>
  <tr>
    <td>Rasmalai</td>
    <td>80/-</td>
    <td>1kg </td>
  </tr>
  
</table>
<br>  


   </body>
</html>