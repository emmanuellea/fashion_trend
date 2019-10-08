

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fashion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    
     <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    
    <script>
	
	function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} 


	
	function checkemail(){
		

		var email=document.getElementById("emailaddress").value;
		
		if(email){
			
			$.ajax({
				
				type:'POST',
				url:'Check_forgotten_password.php',
				data:{
					student_email:email
					
					},
					success:function(response)
					{
						$("#email_status").html(response);
						
						if(response=="ok"){
							
							return true;
							}
							else {
								return false;
								}
							
						}
				
				});
			}
			else{
				
				$("#email_status").html("");
				return false;
				}
				
		}
		
    </script>
    
    <style>
	
	#email_status, #username_status{
		color:red !important;	
		}
		
	body{
		background-color:#F1F1F1;"
	}
		
	#containe{
		background-color:white; 
		padding:25px 35px !important;
		margin-top:120px !important;
		
	}
	
    </style>
    
  </head>
  <body>
  
  <?php require 'Header.php'?>
  

<div class="container">

<div class="row">
<div class="col-md-offset-4 col-md-5" id="containes">

  <br></br>
  
 <div class="text-center jumbo">
    <h4>SIGN UP NOW</h4>
    </div>
    <br>

   <form method="post" action="Signup2.php" autocomplete="off">
   
   <div class="form-group">
   <label for="fullname">Full Name</label>
   <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Fullname">
   </div>
   
   <div class="form-group">
   <label for="Email">Email address</label>
   <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email address">
   </div>
   
   <div class="form-group">
   <label for="username">UserName</label>
   <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
   </div>
   
   
   <div class="form-group">
   <label for="Password">Password</label>
   <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
   </div>
   
   <div class="form-group">
   <label for="cPassword">Re-Enter Password</label>
   <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Re-Enter Password">
   </div>
   
   
   <input type="checkbox" onclick="myFunction()">Show Password 
   
   <div class="row">
      <div class="col-md-6">
      <input type="submit" class="btn btn-primary btn-block" id="submit" value="Create Account">
      </div>
       <div class="col-md-6">
       <input type="reset" class="btn btn-success btn-block" id="reset" value="Reset">
       </div>
      </div>
    
   </form>
   
   <br>
   <div class="form-group">
   <label for="account" style="font-style:italic;">Have account? <a href="Login.php"> Sign in </a></label>
   </div>
   

</div>
</div>


</div>

 
  
 <?php require 'Footer.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
	
	new WOW().init();
	
     </script>
    
  </body>
</html>