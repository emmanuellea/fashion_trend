

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
<div class="col-md-offset-4 col-md-4">
 
 <div class="text-center jumbo">
    <h5>LOGIN TO YOUR ACCOUNT</h5>
    </div>
    <br>

   <form method="post" action="Login2.php" autocomplete="off">
   
   
   <div class="form-group">
   <label for="Email">UserName</label>
   <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
   </div>
   
   
   <div class="form-group">
   <label for="Password">Password</label>
   <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
   </div>
   
   
   <input type="checkbox" onclick="myFunction()">Show Password 
   
   <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary btn-block">
   </form>
   
   <br>
   <div class="form-group">
   <label for="account" style="font-style:italic;">Have no account? <a href="SignUp.php"> Sign up now </a></label>
   </div>
   
  
   <div class="form-group">
   <label for="account" data-toggle="modal" data-target="#mymodal"><a>Forgotten Password?</a></label>
   </div>
   
    <br>
   
   <div>
   <button type="button" class="btn btn-primary btn-block">Login with Facebook</button>
  
   </div>

</div>
</div>


</div>

  
  <br></br>
  
    <!---------------------------modal----------------->
    
  <div id="mymodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        
        <div class="alert alert-info text-center">
        FORGOTTEN PASSWORD
        </div>
        </h4>
      </div>
      
      <form method="post" action="Forgotten_password.php" autocomplete="off">

      <div class="modal-body">
      
      
      <div id="forgotten_password">
      
     <div class="form-group">
   <label for="type">Email Address</label>
   <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Address" onKeyUp="checkemail();">
   <span id="email_status"></span>
   </div>
  
      </div>
      

         
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" value="Send" name="submit" id="submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
      </form>
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