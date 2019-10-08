
<?php  require 'DbConnection.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fashion</title>

   
    <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    <script>
	
	$(document).ready(function() {
		
		 
				
		$(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('#myBtn').fadeIn('slow');
        } else {
            $('#myBtn').fadeOut('slow');
        }
    });
	
    $('#myBtn').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
	
        
    });
   
    
    
    </script>
    
    <style>
	
	#trend{
		background-color:skyblue;
		color:white;
		padding-left:15px;
		padding-bottom:5px;
		padding-top:5px;
	}
	
    </style>
  
   
  </head>
  
  <body>
  
  <?php
  require 'Header.php';
  
  ?>


  
  <br></br>
  <br></br>
  
  <?php 
  $search_value=$_POST['search'];
  
  if($search_value !=""){
  
  $sql1="select id, subject, image, date, Left(description, 80) as description, category from tbl_articles where category like '%".$search_value."%' or subject like '%".$search_value."%' or description like '%".$search_value."%' or date like '%".$search_value."%' order by id desc";
    
   $result1=mysql_query($sql1);
   
   $number=mysql_num_rows($result1);
  
  ?>
  
  <div class="container">
  
  <div id="trend">
  <h4>SEARCH RESULTS FOUND (<?php  echo $number?>)</h4>
  </div>
  
  <br></br>
  
  <div class="row">
  
  
  
  <?php

while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <br>
       
       <div class="products-men">
      <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image"></a>
       
       <div id="description">
      
      <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"><p><?php echo $row1['description']?></p></a>
     
      </div>
      
      <div style="color:orange; text-align:center;">
      <li class="fa fa-star"></li>
      <li class="fa fa-star"></li>
      <li class="fa fa-star"></li>
      <li class="fa fa-star"></li>
      <li class="fa fa-star"></li>
      </div>
      
      </div>
        <?php
       }
	   
  }
  else
  {
	  
	  ?>
      
      <div class="alert alert-danger text-center">
      
      <br>
      
      <h3>SORRY, NO SEARCH RESULT FOUND</h3>
      
      <br>
      </div>
      
      <?php
  }

?>
  
  
  </div>
  </div>
  
  <br></br>
  
 
  <div id="mySidenav" class="sidenav">
  <a href="#" id="about"><i class="fa fa-facebook"></i></a>
  <a href="#" id="blog"><i class="fa fa-google"></i></a>
  <a href="#" id="projects"><i class="fa fa-skype"></i></a>
  <a href="#" id="contact"><i class="fa fa-twitter"></i></a>
</div> 
  
 
  
 <button id="myBtn" title="Go to top">Top</button>
   
  
  <?php
  
  require 'Footer.php';
  ?>
  
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

     <script>
    $(document).ready(function() 
	{

	new WOW().init();
    } );

</script>
    
  </body>
</html>