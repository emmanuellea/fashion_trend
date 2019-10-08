<?php
 
 require 'DbConnection.php';
 
   $sql1="select id, left(subject, 50) as subject, image, date, Left(description, 80) as description, category from tbl_articles where category='Children Jackets' ORDER BY id desc LIMIT 0,20";
    
   
   $result1=mysql_query($sql1);
   
   if(mysql_num_rows($result1)>0)
   {
   
   while($row1=mysql_fetch_assoc($result1))
   {
	   $path2="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <div class="products-men">
      <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path2; ?>" alt="image"></a>
       
       <div id="description">
       
       <a href="Published_article2.php?sno=<?php echo $row1['id'];?>"><p><?php echo $row1['description']?></p></a>
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
  }
	 
	 
    else{
	?>
       <div class="container">
    <div class="row">
    <div class="col-md-offset-4 col-md-4">
    
     <br></br>
    <div class="alert alert-danger">
    <h4>Sorry, No Records to display</h4>
    </div>
    </div>
    
    </div>
    </div>
    <?php
	
	}

?>
   