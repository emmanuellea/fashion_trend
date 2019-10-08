
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
    
    
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet">
    
    
    <script>
	
	$(document).ready(function(){
		
	
	});
    
    </script>
    
    <style>
	
	body{
		background-color:#F1F1F1;"
	}
	
	#container{
		background-color:white;
		padding:20px 30px;
	}
	
    </style>
  </head>
  <body>
  
 
 <?php require 'Header_admin.php';?>
 
 <br></br>
 <br></br>
 
 
<div class="container" id="container">
<div class="row">
<div class="col-md-offset-3 col-md-6 text-center">

<br></br>


<?php

$category=mysql_real_escape_string($_POST['category']);
$subject=mysql_real_escape_string($_POST['subject']);
$image=$_FILES['img']['name'];
$desc=mysql_real_escape_string($_POST['desc']);
$date=date("Y/m/d");

$username=$_SESSION['username'];

if($category !="" || $subject !="" || $link !=""  || $desc !="" || $category !="" || $image !="")
{
	$sql1="select subject, description, category from tbl_articles where subject='".$subject."' and description='".$desc."' and username='".$username."' and category='".$category."'";
	$result1=mysql_query($sql1);
	
	if(mysql_num_rows($result1)>0)
	{
		?>
    
    <div class="alert alert-danger">
    <h4>Sorry!!!, <?php  echo "Article has already been added, Thank You";?></h4>
    
   </div>
   
    <br>
    
    <a href="Admin.php"><button type="button" class="btn btn-warning btn-block">Back</button></a>
    
    <?php
		
		
		}
		
	else
	{
	
	$target="Fashion_images/";
	$targets=$target.basename($_FILES['img']['name']);
	
	$sql="insert into tbl_articles(subject, image, description, date, username, category) values('".$subject."', '".$image."', '".$desc."', '".$date."', '".$username."', '".$category."')";
	
	if(mysql_query($sql)){
	
	if(move_uploaded_file($_FILES['img']['tmp_name'], $targets))
	{
		echo  "The file ".basename($_FILES['img']['name'])." has been uploaded <br>";
		}
		else{
			
			echo "File Upload failed";
			}
			
			
			?>
    
    <div class="alert alert-success">
    <h4>Success!!!, <?php  echo "New Article has been added, successfully";?></h4>
    </div>
    
    <br>
    
    <a href="Admin.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
    
    
    <?php
	}
	
	else{
		
		?>
    
    <div class="alert alert-danger">
    <h4>Sorry!!!, <?php  echo "Adding new article has failed, Please try again";?></h4>
     </div>
     
     <br>
    
    <a href="Admin.php"><button type="button" class="btn btn-warning btn-block">Back</button></a>
   
    
    <?php
		
		}
	
	}
	
	}
	else{
		
		
		
		?>
    
    <div class="alert alert-danger">
    <h4>Sorry!!!, <?php  echo "Please fill all fileds";?></h4>
    </div>
    
    <br>
    
    <a href="Admin.php"><button type="button" class="btn btn-warning btn-block">Back</button></a>
    
    
    <?php
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