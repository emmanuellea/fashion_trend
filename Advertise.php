
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
    <title>FashionVilla</title>

   
    <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
   
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
  
    
    <script>
	
    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=178741326014113';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


	$(document).ready(function(){
		
		//$("#result").fadeOut();
		
		});
		
    
    </script>
    
    <style>
	
	body{
		color:#686b69 !important;
		background-color:#F1F1F1 !important;
	}
	
	h3{
		font-size:27px !important;
	}
	
	h4{
		font-size:20px !important;
	}
	
	
    </style>
  </head>
  <body>
  
  
  <?php
  
  require 'Header.php';
  ?>
  
<br></br>

  
  <div class="container">
   <div class="row">
   <div style="background-color:white; padding:20px !important;">
   <h3>Advertise with us</h3>
   <hr>
   
   <br>

   <p>Internet audiences are the some of the more sophisticated markets you are going to find, and that makes it very sensible indeed to advertise through the internet medium. </p>
   <p>By choosing to advertise on Monitor Online, you are assured of reaching the largest number of internet users (both in Uganda and abroad), because Monitor Online is Uganda’s most frequently visited website. What’s more, you have more options availed to you to help you sell. If the first and second can’t work for you, the third surely will.</p>
   <p> Below is a catalogue of some of the advertising packages we have on offer at Monitor Online</p>
   
   <br>
   
   <h4 style="text-decoration:underline">Advertising space specification</h4>
   <p>We have 5 dedicated authors who contribute in different categories, plus an editor/mod who is responsible for quality check and placements of editorials on the site. tech4me is expanding everyday and we are looking for new ideas to engage the traffic in more suitable ways.</p>
   
   <br></br>
   
   <h4>Comments</h4>
   
   <div class="fb-comments" data-href="http://localhost/emma/tech4me/Phones.php" data-numposts="5"></div>
  
  
   </div> 
</div>

<button id="myBtn" title="Go to top">Top</button>
  
<div id="mySidenav" class="sidenav">
  <a href="http://www.facebook.com/emmanuel.we" id="about">facebook</a>
  <a href="http://www.gmail.com" id="blog">google+</a>
  <a href="#" id="projects">twitter</a>
  <a href="#" id="contact">pinterest</a>
</div>
  
  
  </div><!---------------container---------->
  
  <br></br>
   
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