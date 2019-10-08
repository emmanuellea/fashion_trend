<?php

require 'DbConnection.php';


 $find=mysql_query("select * from tbl_category");
 while($row=mysql_fetch_array($find))
 {
  

    $image ="Misc_images/".$row['image'];

		   ?>
		   <div class="upload_img">
           
            <?php
          
           echo '<img src="'.$image .'" alt="Random image" />';
		   echo $image;
		   ?>
			</div>
            
            <?php 
		 }

      ?>


