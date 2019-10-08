
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
    <title>FashionDesigns</title>

   
    <link href="Mycss/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Mycss/Style.css" rel="stylesheet">
    <link href="Mycss/animate.css" rel="stylesheet">
    
    <link href="Mycss/owl.carousel.min.css" rel="stylesheet">
    <link href="Mycss/owl.theme.default.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    <script>
	
	$(document).ready(function() {
		
		 fetchall();
			
			function fetchall()
			{
				$.ajax({
					
					type:'POST',
					url:'Fetch_men.php',
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
		 
         url: 'Load_more_men.php',
         data: {
			 
         getresult:val
		 
         },
       success: function (response) {
	   var content = document.getElementById("load_result");
	   
      content.innerHTML = content.innerHTML + response;

      document.getElementById("row_no").value = Number(val)+8;
      }
      });
    }
        
    });
   
    
    
    </script>
    
    <style>
    
#men-trend{
	background-color:#7d9792;
	margin-bottom:50px;
	margin-top:100px;
	padding-bottom:30px;
	padding-top:30px;
}

	
    </style>
  
   
  </head>
  
  <body>
  
  <?php
  require 'Header.php';
  
  ?>
  
  <div class="container">
  
 
  <br></br>
  
  <h3 id="fashion_type">MEN SHIRTS</h3>
   <hr>
  
  
  <div class="row">
  <div id="load_result"></div>
  
  <input type="hidden" id="row_no" value="20">
  </div>
  
  <br>
  
  <div class="row">
  <button class="btn btn-primary" type="button" id="loadmore">Click to load more Articles</button>
  </div>

  </div>
  
  
  
  <div id="men-trend">
  <div class="container">
  
  <div class="col-md-offset-1 col-md-10">
  <div class="col-md-6">
  
  <div id="men-desc">
  <h3>THE LATEST MAN</h3>
  <P>Bringing You the Elements of Style
Scroll this page to see how the navbar behaves with data-spy="affix".

The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</P>
  </div>
  
  </div>
  <div class="col-md-6">
  <img src="Fashion_images/latest-man.jpg" height="450" width="300" class="pull-right" style="padding-top:10%; padding-bottom:10%;" />
  </div>
  </div>
  </div>
  </div>
  
  
  
  <div class="container">
  <div class="row">
  
  <br></br>
  
  <div id="hot_block">
   <h4>SEE SELECTED MEN'S WEAR</h4>
   </div>
 
<br></br>
  
  
  <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(subject,50) as subject, image, category  FROM tbl_articles where category='Men Trousers' or category='Men Trousers' or category='Men Bags' or category='Men Shoes' or category='Men Jackets' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path2="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="contain">
       
      <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path2; ?>" alt="image" width="250px" height="300px"></a>
       
       <div class="content">
    <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"> <p style="color:#f1f1f1;"><?php echo $row1['subject'];?></p></a>
     </div>
   </div>
	   
       <?php
	   
	   }
   
   ?>
</div>
  
  </div>
  </div>
  
 
 <br></br>
 
  
  <?php
  
  require 'Side_nav_social.php';
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
	
	$('.owl-carousel').owlCarousel({
		
		
		loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
			loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        },
        600:{
            items:3,
            nav:false,
			loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        }
		
	}
		
		});
	
	new WOW().init();
} );

</script>

<script src="Myjs/owl.carousel.min.js"></script>
    
     
  </body>
</html>