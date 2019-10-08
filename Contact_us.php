
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

   
    <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
  
    
    <script>
	$(document).ready(function(){
		
		$("#result").fadeOut();
		
		});
		
		function submitdata()
		{
			
			var name=document.getElementById("fullname").value;
			var email=document.getElementById("email").value;
			var message=$("#message").val();
			
			
			if(name && email  && message)
			{
				$.ajax({
					
					type:'POST',
					url:'Send_message.php',
					data:{
						
						fullname:name,
						uemail:email,
						umessage:message,
						
						},
						success:function(response)
						{
							$("#result").fadeIn(1000);
							$("#result").removeClass(".result");
							$("#result").fadeOut(2000).addClass(".result");
							
							
							document.getElementById("fullname").value="";
							document.getElementById("email").value="";
							document.getElementById("message").value="";
							}
					
					});
				}
				
				return false;
			}
			
			
    </script>
    
    <style>
	
	body{
		color:#686b69 !important;
		background-color:#F1F1F1 !important;
	}
	
	.result{
		display:none;
	}
	
    </style>
  </head>
  <body>
  
  
  <?php
  
  require 'Header.php';
  ?>
  
<br></br>
<br></br>
  
  <div class="container">
  
  <div id="advertise_us">
<h1>1. Do you have any questions to ask us?</h1>
<h1>2. Do you want to advertise your business with us?</h1>
<h1>3. Do you have any product you want us to write about?</h1>
<h1>4. Do you posses good writting skills? <a href="SignUp.php">we can Hire You</a></h1>
<br>
<h4>Just place an email or call us. We’ll get in touch with you as soon as possible.</h4>
<h4>The entire world listens and hears about us.</h4>

</div>
<hr></hr>
  
  
    <br></br>
  
  
  
   <div class="row">
   <div class="col-md-8" style="background-color:white; padding:20px !important;">
   
   <div id="result">
   <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Message sent successfully.
</div>
   </div>
  
   
   <br />
   <form method="post" onSubmit="return submitdata();">
   
    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
    </div>
    
    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
    </div>
    
    <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" rows="5" placeholder="Type message here....." id="message"></textarea>
    </div>
    
    <input type="submit" class="btn btn-warning btn-block" value="SEND" name="submit" id="send_data">
   
  
  
</form>

   </div>
   
   <div class="col-md-4 text-center">
   <fieldset>
   
   <legend>
   <h3>Our Address</h3>
   </legend>
   
   <h4>Telligent Mobile Solutions Ltd</h4>
   <h4>2rd Floor, Safety Street</h4>
   <h4>63B Spring Road, Nakasero </h4>
   <h4>Kampala, Uganda. </h4>
   </fieldset>
   
   <br></br>
   
   <h4>Email: info@wisdomhub.com</h4>
   <h4>Telephone: +91 9878344618</h4>
   <h4>Whatsapp: +91 9878344618</h4>
   <h4>Fax: +91 9878344618</h4>
  
   </div>
    
</div><!-------------------row-------------------->

<button id="myBtn" title="Go to top">Top</button>
  
 <div id="mySidenav" class="sidenav">
  <a href="#" id="about"><i class="fa fa-facebook"></i></a>
  <a href="#" id="blog"><i class="fa fa-google"></i></a>
  <a href="#" id="projects"><i class="fa fa-skype"></i></a>
  <a href="#" id="contact"><i class="fa fa-twitter"></i></a>
</div>
  
  
  </div><!---------------container---------->
  
  <br></br>
  
  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.068404081605!2d32.57069634256224!3d0.3136191932625027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb8140354859%3A0x8593c44a441a98f3!2sKampala+Serena+Hotel+High-end+hotel+with+a+pool+%26+spa!5e0!3m2!1sen!2sin!4v1510893289473" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 
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