<?php

require 'DbConnection.php';

if(isset($_POST['get_option']))
{
 

 $category = $_POST['get_option'];
 $find=mysql_query("select image from tbl_category where category='".$category."'");
 while($row=mysql_fetch_array($find))
 {
  
 


    $files = glob("Misc_images/".$row['image']);
    for ($i=0; $i<count($files); $i++)
     {
       $image = $files[$i];
       $supported_file = array(
               'gif',
               'jpg',
               'jpeg',
               'png'
        );
 
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {
          
		   ?>
		   <div class="upload_img">
           
            <?php
             
			
		   
           echo '<img src="'.$image .'" alt="Random image" />';
		   echo $image;
		   ?>
			</div>
            
            <?php
           } else {
               continue;
           }
         }
		 
		 
		 }
}



      ?>


