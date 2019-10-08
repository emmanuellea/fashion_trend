
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
   <h3>General Comments about FashionVilla</h3>
   <hr>
   
   <br>
   <h4 style="text-decoration:underline">About Comments</h4>
   <p>Tech4me.com covers all major technology inventions plus the business side of technogical industry with indepth analysis, statistics, numbers and facts/figures. Its a new site but the team behind Tech4me has 2 years of experience in technology blogging. Currently we have a few writers working on the site who cover different technology stories but very soon in future we are planning to start a “Writers Contribution Program” where we will hire new authors on voluntarily or paid basis depending on the experience.</p>
   
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