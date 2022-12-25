<html>
<head>
    <title> Guest Signup | Sanghamitra Caterer </title>
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
.header7{
  text-align: center;
  color:white ;
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
        </div>

      </div>
    </nav>

    <br>
    <br>
    <br>
  
    <div class ="header7">
    <h3> Hey Guest, Welcome to <br> Sanghamitra Caterer!</h3>
      
    </div>
    <br>
    <br>
    

    <div class="container">
      
      <div class="col-md-5" style="float: none; margin: 0 auto;">
        <form method="post" action="customer_registered_success.php">
        <div class="form-group">
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" required autofocus="" >
        </div>  

        <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus="" >
        </div>  

        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     


          <div class="form-group">
            <input type="Number" class="form-control" id="contact" name="contact" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="address" name="address" placeholder="Address" maxlength="80" rows="4"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block"> </p></span>
          </div> 
        
        <div class="form-group">
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="" >
          </div> 


         
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>   

        </form>

        </body>
</html>
          