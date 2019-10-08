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
    
    
    <script type="text/javascript">
	
	
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=178741326014113';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	
	
		$(document).ready(function() {
		
		 fetchall();
			
			function fetchall()
			{
				$.ajax({
					
					type:'POST',
					url:'Fetch_Lingerie.php',
					success:function(data)
					{
						$("#load_result").html(data);
						}
					
					});
				}
				
				
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
	
					$("#loadmore").click(function(){
					
					loadmore();
					});
				
				
		function loadmore()
         {
			 
      var val = document.getElementById("row_no").value;
	  
         $.ajax({
         type: 'post',
		 
         url: 'Load_more_lingerie.php',
         data: {
			 
         getresult:val
		 
         },
       success: function (response) {
	   var content = document.getElementById("load_result");
	   
      content.innerHTML = content.innerHTML + response;

      document.getElementById("row_no").value = Number(val)+20;
      }
      });
    }
        
    });
    
    </script>
    
    <style>
	
    </style>
  </head>
  <body>
  
 
  
  <?php require 'Header.php'?>



  <div class="container">
  
  <br></br>
  
  <h3 id="fashion_type">LINGERIE</h3>
   <hr>
   
   <br></br>
  
  <div class="row">
   <div id="load_result"></div>
  <br>
  <input type="hidden" id="row_no" value="8">
  
   <br>
   </div>
  <div class="row">
  <button type="button" class="btn btn-primary" id="loadmore">Show more Lingerie</button>
  </div>
  </div>
  
  
     <br></br>
  
  
 <button id="myBtn" title="Go to top">Top</button>

<?php
 require 'You_may_like.php';
 ?>
 
 <br></br>
 
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