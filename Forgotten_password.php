
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

    <!-- Bootstrap -->
    
     <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    
    
    <script>
	

    </script>
    
    <style>
	
	body{
		background-color:#F1F1F1;"
	}
	
	#container{
		background-color:white;
		padding:50px 40px;
	}
		
	
    </style>
  </head>
  <body>


<?php
require 'Header.php';

?>

<br></br>
<br></br>
<br></br>


<div class="container">
<div class="row">

<div class="col-md-offset-4 col-md-4" id="container">
<?php


$email=$_POST['email'];

if($email !=""){
	
	$sql="select email from tbl_publishers where email='".$email."'";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)>0){
		
		// send password on email
		
		?>
        
        <div class="alert alert-success">
              
              <h4>Success!!!  we have sent you a password, Check your email</h4>
              
              </div>
              
              <br>
              <a href="Login.php"><button type="button" class="btn btn-success btn-block">Go back</button></a>
        
        
        <?php
		
		}
		else{
			
			
			?>
        
        <div class="alert alert-danger">
              
              <h4>Sorry!!!  This email does not exist in our database, Please try again</h4>
              
              </div>
              
              <br>
              <a href="Login.php"><button type="button" class="btn btn-success btn-block">Go back</button></a>
        
        <?php
			
			}
	
	}

              
     ?>
			  
			  
</div>
</div>
</div>


<br></br>

<?php

require 'Footer.php';

?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
   
    
  </body>
</html>