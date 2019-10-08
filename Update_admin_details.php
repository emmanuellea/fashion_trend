
  <div id="myModal<?php echo $id;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
        
        <div class="alert alert-info text-center">
        Update Your Records
        </div>
        </h4>
      </div>
      
      <form method="post">

      <div class="modal-body">
      
      
      <?php
	  
	  
      
	  $sql="select * from tbl_un_verified where id='".$id."'";
	  $result=mysql_query($sql);
	  
	  while($row=mysql_fetch_assoc($result))
	  {
		  
		 
	  ?>
      <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
      
      
      <div class="form-group">
      <label for="firstname">Full Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['full_name']?>">
      </div>
  
      
      <?php
	
	 }
	  
	  ?>
      
        
      </div>
      
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Update Record" onclick="return confirm('Are you sure want to update this record?');">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
      </form>
    </div>
    
    

  </div>
</div>