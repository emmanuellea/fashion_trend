<?php

require 'DbConnection.php';


if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 
 
 $sqls="select * from tbl_header_image where id='".$id."'";
	  $results=mysql_query($sqls);
	  
	  while($rows=mysql_fetch_assoc($results))
	  
	  {
		  
		  $path="Header_image/".$rows['image'];
	  
	  ?>
      

   
   <input type="hidden" id="id" name="id" value="<?php echo $rows['id'];?>" />
   
     <div class="form-group">
     <label for="Category">Category</label>
     <select name="category" class="form-control">
     <optgroup label="MEN">
          <option value="Men Shirts">Shirts and T-Shirts</option>
          <option value="Men Trousers">Trousers and Jeans</option>
          <option value="Men Bags">Bags, Belts and Wallets</option>
          <option value="Men Shoes">Shorts and Shoes</option>
          <option value="Men Jackets">Jackets and Sweaters</option>
          </optgroup>
          <br>
     
     <optgroup label="WOMEN">
          <option value="Women Tops">Tops, T-Shirst and Blouses</option>
          <option value="Women Dresses">Dresses and Sarees</option>
          <option value="Women Bags">Bags, Belts and Wallets</option>
          <option value="Women Shoes">Shoes and Sandals</option>
          <option value="Jewellery">Jewellery</option>
          <option value="Women Trousers">Tousers, Jeans and Skirts</option>
          <option value="Women Jackets">Jackest and Sweaters</option>
          <option value="Women Lingerie">Lingerie and Bras</option>
          </optgroup>
          <br>
     
     <optgroup label="CHILDREN">
          <option value="Children Shirts">Shirts, T-shirts and Trousers</option>
          <option value="Children Shoes">Shoes, Shorts</option>
          <option value="Children Jackets">Jackets</option>
          </optgroup>
          
          <br>
          
     <optgroup label="OTHERS">
         <option value="Accessories">Accessories</option>
         <option value="Hot deals">Deals</option>
         </optgroup>
     </select>
     </div> 
   
     
     <div class="form-group">
     <label for="subject">Title</label>
     <input type="text" name="title" id="title" class="form-control" value="<?php echo $rows['title'];?>">
     </div>
     
     <div class="form-group">
     <label for="topic">Misc</label>
     <input type="text" name="misc" id="misc" class="form-control" value="<?php echo $rows['misc'];?>">
     </div>
     
     <br>
     <input type="file" accept="image/*" onchange="preview_image2(event)" name="img">
     <img id="output_image2"/>
     
     <img src='<?php echo $path;?>' width="200" height="100">
     
     <br>
     
     <div class="form-group">
     <label for="description">Description(Topic)</label>
     <textarea class="form-control" name="desc" id="desc" rows="3"><?php echo $rows['description'];?></textarea>
     </div>
     
     
        <?php
		
	  }
}
		

?>