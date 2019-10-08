<?php
 
 require 'DbConnection.php';
 
  if(isset($_POST['getresult']))
  {
 

    $no = $_POST['getresult'];
   
 
  $sql1="select id, left(subject, 50) as subject, image, date, Left(description, 80) as description, category from tbl_articles where category='Accessories' ORDER BY id desc LIMIT $no,20";
    
$result1=mysql_query($sql1);

while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
   
       
      <div class="products-men">
      <a href="Published_article.php?sno=<?php echo $row1['id'];?>"> <img src="<?php echo $path; ?>" alt="image"></a>
       
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
  }

?>