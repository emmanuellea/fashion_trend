<?php

   require 'DbConnection.php';
   
   if(isset($_POST['getresult']))
  {
 

    $no = $_POST['getresult'];
   
   
   $sql1="select id, subject, image, date, Left(description, 200) as description, category from tbl_articles where category='hot deals' ORDER BY id desc LIMIT $no,8";
 
$result1=mysql_query($sql1);

while($row1=mysql_fetch_assoc($result1))
   {
	   $path="Fashion_images/".$row1['image'];
	   
	   ?>
       
       <br>
       
       <div class="media">
        <div class="media-left">
        <a href="Published_article.php?sno=<?php echo $row1['id'];?>"><img src="<?php echo $path; ?>" class="media-object" style="width:350px; height:200px;"></a>
        </div>
        
       <div class="media-body">
       
       <a href="Published_article.php?sno=<?php echo $row1['id'];?>"><h4 class="media-heading"><?php echo $row1['subject']?></h4></a>
       
       <p><?php echo $row1['description']?></p>
       <p style="font-size:12px !important;">Date Published:<?php echo $row1['date']?></p> 
      
        </div>
    </div>
	   
       <hr>
        <?php
       }
	   
  }

?>