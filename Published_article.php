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
    
    <link href="Mycss/owl.carousel.min.css" rel="stylesheet">
    <link href="Mycss/owl.theme.default.css" rel="stylesheet">
    
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet">
    
    
    <script type="text/javascript">
	
	
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=178741326014113';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	
	
function submitdata()
{
 var comment=document.getElementById("comment");
 var name=document.getElementById("name");
 
if(comment !="" && name !=""){
 $.ajax({
  type: 'post',
  url: 'Send_comment.php',
  data: {
   user_comment:comment,
   user_name:name
  },
  success: function (response) {
   alert("comment has been saved");
  }
 });
}
else{
	
	$("#name").css({"border":"2px solid red"});
	
	}
	
 return false;
}
	
	
	$(document).ready(function(){
				
		
		$(window).scroll(function(){
        if ($(this).scrollTop() > 450) {
            $('#myBtn').fadeIn('slow');
        } else {
            $('#myBtn').fadeOut('slow');
        }
    });
	
    $('#myBtn').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
	
	$("#comment").focus(function(){
		
		$("#name").removeClass("name");
		$("#submit").removeClass("submit");
		});
	
	});
    
    </script>
    
    <style>
		
	
	.name{
		display:none;
	}
	
	.submit{
		display:none;
	}
	
	#style{
		line-height:35px !important;
	}
	
		

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;
  
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;
  
}

.fa-google {
  background: #dd4b39;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;
  
}

.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;

}


.fa-instagram {
  background: #125688;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;
  
}

.fa-pinterest {
  background: #cb2027;
  color: white;
  padding: 15px;
  font-size: 20px;
  text-align: center !important;
  text-decoration: none !important;
  margin: 5px 2px !important;
  
}
	
.products-men{
	height:350px;
	float:left;
	display:block;
	width:250PX;
	margin:10px 15px;
	position:relative;
}

.products-men img{
	height:200px;
	width:100%;
	position:relative;
	
}

.products-men:hover{
	color:skyblue;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding-bottom:5px;
}

#myImg{
		width:50%;
		height:300px;
		margin:0 auto;
	}
	
	
    </style>
  </head>
  <body>
  
 
  
  <?php require 'Header.php'?>


<br></br>
<br></br>

  
   <div class="container">
   <div class="row">
   <div class="col-md-9">
   
   
  <br>
  <?php
  
   $sno=$_REQUEST['sno'];
   
   $sql4="select * from tbl_articles where id='".$sno."'";
   
   
   $result4=mysql_query($sql4);
   
   while($row4=mysql_fetch_assoc($result4))
   {
	   $path2="Fashion_images/".$row4['image'];
	   ?>
       
       <div id="published_title">
       <p style="font-size:35px !important; font-weight:bold; line-height:40px;"><?php echo $row4['subject']?>.</p>
       <p style="font-size:12px !important;">Date Published:<?php echo $row4['date']?>.</p>
       
 <a href="http://www.facebook.com/emmanuel.we" class="fa fa-facebook"></a>
<a href="http://www.facebook.com/emmanuel.we" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

</div>

<br></br>
       
       <img src="<?php echo $path2; ?>" alt="image" id="myImg" />
        
        <br></br>
        
       <hr>
       <div id="style">
       <p><?php echo $row4['description']?>.</p>
       </div>
       

<br>    
    
    <p style="font-style:italic; font-size:12px !important;">Written by: <?php echo $row4['username']?></p>
    
    <div class="social"> 
  <div class="social_medias">
       
      <a href="http://www.facebook.com/emmanuel.we" class="fa fa-facebook"></a>
<a href="http://www.facebook.com/emmanuel.we" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

       <div class="fb-like"  data-href="http://localhost/emma/tech4me/Fashion.php" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
       <div class="fb-share-button" data-href="http://localhost/emma/tech4me/Fashion.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Femma%2Ftech4me%2FFashion.php&amp;src=sdkpreparse">Share</a></div>
       
       
       </div>
   </div>
  
   <?php
	   }
   
   ?>
  
   
   </div>

   
   <div class="col-md-3"></div>
   </div>
   </div>
   
   
   
    <br></br>
      
   <div class="container">
   <div class="row">
   <div class="col-md-8">
   <hr>
   
   <div class="fb-comments" data-href="http://localhost/emma/tech4me/Fashion.php" data-numposts="5"></div>
  
   </div>
   <div class="col-md-4"></div>
   </div>
   </div>

   
   
   <br></br>
   
   
   <div class="container">
  <div class="row">
 
  
  <div id="hot_block">
   <h4>SIMILAR PRODUCTS</h4>
   </div>
 
<br></br>
  
  
  <div class="owl-carousel owl-theme">
  <?php
   
    $sql1="select id, left(subject, 50) as subject, image, date, Left(description, 80) as description, category from tbl_articles ORDER BY id desc LIMIT 0,20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="products-men">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image" width="250px" height="330px"></a>
       
       <div id="description">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <p><?php echo $row1['description']?></p></a>
       </div>
      
      <div style="color:orange; text-align:center;">
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
 
   
 <button id="myBtn" title="Go to top">Top</button>
 <br></br>

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