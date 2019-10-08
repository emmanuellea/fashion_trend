
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
					url:'Fetch_deals.php',
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
		 
         url: 'Load_more_deals.php',
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
    
		
	.products-mens{
	height:350px;
	float:left;
	display:block;
	width:250px;
	margin:15px;
	position:relative;
}

.products-mens img{
	height:200px;
	width:100%;
	position:relative;
	
}

.products-mens:hover{
	color:skyblue;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding-bottom:5px;
	margin:15px;
}


	
	
	</style>
  
   
  </head>
  
  <body>
  
  <?php
  require 'Header.php';
  
  ?>
  
  
    
  <div class="container">
  
  <br></br>
  
  <h3 id="fashion_type">HOT DEALS FOR TODAY</h3>
   <hr>
   
 <div class="row">
 
 <br></br>


 <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(description,80) as description, image, category FROM tbl_articles where category='Jewellery' or category='Lingerie' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
      <div class="products-mens">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="300px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
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
   
   ?>
</div>

 </div>
 </div>
 
 <br></br>
 
 <div class="container">
 <div class="row">
 
 <br></br>
 
  <div id="hot_block">
   <h4>SELECTED WOMEN WEAR</h4>
   </div>
 
<br></br>

 <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(description,80) as description, image, category FROM tbl_articles where category='Women dresses' or category='Women Tops' or category='Women Shoes' or category='Women Bags' or category='Women Jackets' or category='Lingerie' or category='Jewellery' or category='Women Trousers' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
      <div class="products-mens">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="300px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
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
   
   ?>
</div>

 </div>
 </div>

<br>


<br>
  
  <br></br>
  
  <div class="container">
 <div class="row">
 
 <br></br>
 
  <div id="hot_block">
   <h4>SELECTD MEN'S WEAR</h4>
   </div>
 
<br></br>

 <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(description,80) as description, image, category FROM tbl_articles where category='Men Shirts' or category='Men Trousers' or category='Men Bags' or category='Men Shoes' or category='Men Jackets' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
      <div class="products-mens">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="300px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
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
   
   ?>
</div>

 </div>
 </div>

<br>

<!---------------------children------------------------------------------>

<div class="container">
 <div class="row">
 
 <br></br>
 
  <div id="hot_block">
   <h4>ACCESSORIES</h4>
   </div>
 
<br></br>

 <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(description,80) as description, image, category FROM tbl_articles where category='Accessories' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="products-mens">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="250px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
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
   
   ?>
</div>

 </div>
 </div>

<br>


<!------------------------------accessories------------------------->


<br></br>


<div class="container">
 <div class="row">
 
 <br></br>
 
  <div id="hot_block">
   <h4>SELECTED CHILDREN'S WEAR</h4>
   </div>
 
<br></br>

 <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(description,80) as description, image, category FROM tbl_articles where category='Children Jackets' or category='Children Shoes' or category='Children Shirts' ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="products-mens">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="300px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
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
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
		
	}
		
		});
	
	new WOW().init();
} );

</script>

<script src="Myjs/owl.carousel.min.js"></script>
     
  </body>
</html>