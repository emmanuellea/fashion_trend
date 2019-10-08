<?php

require 'DbConnection.php';



if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 
 
 $sqls="select * from tbl_articles where id='".$id."'";
	  $results=mysql_query($sqls);
	  
	  while($rows=mysql_fetch_assoc($results))
	  
	  {
		  
		  $path="Fashion_images/".$rows['image'];
	  
	  ?>
      

   
   <input type="hidden" id="id" name="id" value="<?php echo $rows['id'];?>" />
   
   <div class="form-group">
     <label for="category">Category</label>
     <select name="category" class="form-control">
     <option value="Men">Men</option>
     <option value="Women">Women</option>
     <option value="Children">Children</option>
     <option value="Hot Deals">Hot Deals</option>
     <option value="Sports">Sports</option>
     </select>
     </div>
     
     <div class="form-group">
     <label for="subject">Subject</label>
     <input type="text" name="subject" id="subject" class="form-control" value="<?php echo $rows['subject'];?>">
     </div>
     
     
     <br>
     <input type="file" accept="image/*" onchange="preview_image2(event)" name="img">
     <img id="output_image2"/>
     
     <img src='<?php echo $path;?>' width="200" height="100">
     
     <br>
     
     <div class="form-group">
     <label for="description">Description(Topic)</label>
     <textarea class="form-control" name="desc" id="desc" rows="10"><?php echo $rows['description'];?></textarea>
     </div>
     
     
     <br>
     
        <?php
		
	  }
}
		

?>