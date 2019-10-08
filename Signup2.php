<?php
require 'DbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tech4me</title>

   
    <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    
    <script>
	
    
    </script>
  
   
  </head>
  
  <body>
  
  <?php
  require 'Header.php';
  
  ?>
  

  <br></br>
  <br></br>
  
  <div class="container">
  <div class="row">
  
  <div class="col-md-offset-3 col-md-6">
  
  <?php
  
  $fullname=mysql_escape_string($_POST['fullname']);
  $email=mysql_escape_string($_POST['email']);
  $username=mysql_escape_string($_POST['username']);
  $password1=mysql_escape_string($_POST['password']);
  $password2=mysql_escape_string($_POST['cpassword']);
  
  $password=md5($password1);
  $cusername=md5($username);
  
  if($fullname =="" || $email =="" || $username =="" || $password1 =="" || $password2 =="")
  {
	  ?>
      
      <div class="alert alert-danger">
      
      <p>Sorry, Please fill all fields</p>
      </div>
      
      <br>
      
      <a href="SignUp.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
      
      <?php
	  }
	  
	  else
	  {
  
  $sql1="select email from tbl_publishers where email='".$email."'";
  $result1=mysql_query($sql1);
  
  $sql3="select email from tbl_un_verified where email='".$email."'";
  $result3=mysql_query($sql3);
  
  if(mysql_num_rows($result1)>0 || mysql_num_rows($result3)>0)
  {
	  
	  ?>
      
      <div class="alert alert-danger">
      
      <p>Sorry, This email or username has already been registered. Please try again</p>
      </div>
      
      <br>
      
      <a href="SignUp.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
      
      <?php
	  
	  }
	  
	  else
	  {
		  
		  if($password1 == $password2){
			  
		  $sql2="insert into tbl_un_verified(full_name, email, username, password) values('".$fullname."', '".$email."', '".$username."', '".$password."')";
		  
		  $sql4="insert into tbl_user(username, password) values('".$cusername."', '".$password."')";
		 
		  if(mysql_query($sql2) && mysql_query($sql4))
		  {
			  ?>
      
      <div class="alert alert-success">
      
      <p>Success! We have successfully recieved your details, We shall send you an email when we finish verifying your account, Thank you.</p>
      </div>
      
      <br>
      
      <a href="SignUp.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
      
      <?php
			  }
			  
			  else
		  
		  {
			  ?>
      
      <div class="alert alert-danger">
      
      <p>Sorry, Your Registration has failed, Please try again</p>
      </div>
      
      <br>
      
      <a href="SignUp.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
      
      <?php
			  }
			  
			  
		  }
		  else{
			  
			  ?>
      
      <div class="alert alert-danger">
      
      <p>Sorry, Your passwords do not match. Please try again</p>
      </div>
      
      <br>
      
      <a href="SignUp.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
      
      <?php
			  
			  }
		  }
	  }
  
  ?>
  
  </div>
   
  </div>
  </div>
 
  
  <?php
  
  require 'Footer.php';
  ?>
  
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

     <script>
	
	new WOW().init();
	
     </script>
     
  </body>
</html>