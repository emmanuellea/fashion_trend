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
    <link rel="shortcut icon" href="Images/browser.png" type="image/x-icon">
    
    <link href="Mycss/owl.carousel.min.css" rel="stylesheet">
    <link href="Mycss/owl.theme.default.css" rel="stylesheet">
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    <script src="Myjs/Affixede.js"></script>
    
    <script>
	
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=178741326014113';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	
	$(document).ready(function() {
		
		window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
		
		 fetchall();
			
			function fetchall()
			{
				$.ajax({
					
					type:'POST',
					url:'Fetch_all_records.php',
					success:function(data)
					{
						$("#load_result").html(data);
						}
					
					});
				}
				
								
				$("#loadmore").click(function(){
					
					loadmore();
					});
				
				
		function loadmore()
         {
			 
      var val = document.getElementById("row_no").value;
	  
         $.ajax({
         type: 'post',
		 
         url: 'Load_more_home.php',
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
    
	
.dropdown-toggle {
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-menu {
    display: block;
}


.progress-container {
  width: 100%;
  height: 8px;
  background:rgba(0,0,0,0.7) !important;
  margin-bottom:0px !important;
}

.progress-bar {
  height: 8px;
  background:grey;
  width: 0%;
}

#headers{
	display:none;
}
    </style>
  
   
  </head>
  
  <body>
  
  <?php
  require 'Header.php';
  
  ?>
  
  <div id="headers">
  <br></br>
  <br>
  </div>
  
  <br></br>

  
  <div class="container">
  <div class="row">
  
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php
      
 $query  = "select id, title, image, left(description, 180) as description from tbl_header_image";
$res    = mysql_query($query);
$count  =   mysql_num_rows($res);
$slides='';
$Indicators='';
$counter=0;
 
    while($row=mysql_fetch_array($res))
    {
 
        $title = $row['title'];
        $desc = $row['description'];
		$image="Header_image/".$row['image'];
		
        if($counter == 0)
        {
		
          ?>
            
           <div class="item active">
            <img src="<?php echo $image; ?>" alt="<?php echo $title?>" />
            
         <div class="carousel-caption">
         <a href="Published_header.php?sno=<?php echo $row['id']; ?>"> <h3><?php echo $title?></h3></a>
   <a href="Published_header.php?sno=<?php echo $row['id']; ?>"><p> <?php echo $desc;?></p> </a>        
            </div>
          </div>
 
        <?php
        }
        else
        {
        ?>
          <div class="item">
            <img src="<?php echo $image; ?>" alt="<?php echo $title?>" />
            <div class="carousel-caption">
               <a href="Published_header.php?sno=<?php echo $row['id']; ?>"> <h3><?php echo $title?></h3></a>
              <a href="Published_header.php?sno=<?php echo $row['id']; ?>"><p> <?php echo $desc;?></p> </a>    
            </div>
          </div>
          
          <?php
        }
        $counter++;
    }
 
?>
	  
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      </div>
	  </div>
      

  
  <div class="container">
  
   <br></br>
  
  <div class="row">
  <div id="load_result"></div>
  <input type="hidden" id="row_no" value="20">
  
  </div>
  
  
  <div class="row">
  <br>
  <button class="btn btn-primary" type="button" id="loadmore">Load more products</button>
  <br></br>
  </div>
  
 </div>
  
  
  
    <div id="men-trend">
  <div class="container">
  
  <div class="col-md-4">
  
  <img src="Fashion_images/men_shoes.jpg" height="350" width="300" />
  
  </div>
  <div class="col-md-4">
  
  <div id="men-desc">
  <h3>THE LATEST MAN</h3>
  <P>Bringing You the Elements of Style
Scroll this page to see how the navbar behaves with data-spy="affix".

The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</P>
  </div>
  
  </div>
  <div class="col-md-4">
  <img src="Fashion_images/latest-man.jpg" height="350" width="300" />
  </div>
 
  </div>
  </div>
    

 <div class="container">
 <div class="row">
 <div class="col-md-offset-3 col-md-6">
     
     <div id="men-desc2">
  <h3>THE LATEST MAN</h3>
  <P>Bringing You the Elements of Style
Scroll this page to see how the navbar behaves with data-spy="affix".

The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</P>

<P>Bringing You the Elements of Style
Scroll this page to see how the navbar behaves with data-spy="affix".

The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</P>
  </div>
     
 </div>
 </div>
 </div>
    
   
   
  <div class="container">
  <div class="row">
 
  
  <div id="hot_block">
   <h4>TRENDING FASHION WEARS FOR FASHIONATE PEOPLE</h4>
   </div>
 
<br></br>
  
  
  <div class="owl-carousel owl-theme">
  <?php
 
   $sql1="SELECT id, left(subject,50) as subject, image FROM tbl_articles ORDER BY RAND() LIMIT 20";
   
   $result1=mysql_query($sql1);
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path2="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="contain">
       
      <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path2; ?>" alt="image" width="250px" height="330px"></a>
       
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
        },
		
	}
		
		});
	
	new WOW().init();
} );

</script>

<script src="Myjs/owl.carousel.min.js"></script>
    
  </body>
</html>