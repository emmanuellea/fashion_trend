
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
    <title>Fashion</title>

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
require 'Header_publish.php';

?>

<br></br>
<br></br>
<br></br>


<div class="container">
<div class="row">

<div class="col-md-offset-4 col-md-4" id="container">
<?php


$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];

$oldpass=md5($oldpassword);
$newpass=md5($newpassword);

$username=$_SESSION['username'];

if($oldpassword !="" && $newpassword !="")
{
	$sql="select password from tbl_user where password='".$oldpassword."' and username='".$username."'";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)>0){
		
		$sql2="update tbl_user set password='".$newpassword."' where username='".$username."'";
		
		  
		  if(mysql_query($sql2))
		  {
			  ?>
              
              <div class="alert alert-success">
              
              <h4>Success!!!  You have successfully Changed your password</h4>
              
              </div>
			  
			  <?php
			  }
		
		}
		else{
			
			header('Location:Publisher_main.php');
			}
	
	}
	
	else{
			
			header('Location:Publisher_main.php');
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