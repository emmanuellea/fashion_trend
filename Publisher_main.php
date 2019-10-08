
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
    
    <script src="Myjs/jquery-3.2.1.js"></script>
    <script src="Myjs/wow.js"></script>
    <script src="Myjs/Subscribe.js"></script>
    
    
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet">
    
    
    <script>
	
	function preview_image2(event) 
        {
          var reader = new FileReader();
          reader.onload = function()
        {
         var output = document.getElementById('output_image2');
         output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
       }
	   
	   
	   function preview_image(event) 
        {
          var reader = new FileReader();
          reader.onload = function()
        {
         var output = document.getElementById('output_image');
         output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
       }
	   
	
	$(document).ready(function(){
		
		
	$(document).on('click', '#getdata', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); 
  
     $('#dynamic-content').html('');
     /*$('#modal-loader').hide();*/ 
 
     $.ajax({
          url: 'Publisher_Modal.php',
          type: 'POST',
          data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content').html('');
          $('#dynamic-content').html(data);
          /*$('#modal-loader').hide();*/
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          /*$('#modal-loader').hide();*/
     });

    });
		
	
	});
    
    </script>
    
    <style>
	
	body{
		background-color:#F1F1F1;"
	}
	
	#container{
		background-color:white;
		padding:20px 30px;
	}
	
	#output_image{
		width:300px;
		height:150px;
		
		}
		
		#output_image2{
		width:200px;
		height:100px;
		
		}
	
    </style>
  </head>
  <body>
  
 
 <?php require 'Header_publish.php';?>
 
 <br></br>
 

<div class="container" id="container">

<div id="first1">
   <div id="heading-block">
   <h5>My Account Administration</h5>
   </div>
   </div>
   </div>
   
   <br></br>
   
   <div class="container" id="container">
   
   <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">MY ACCOUNT</a></li>
  <li><a data-toggle="tab" href="#menu1">WRITE MY ARTICLE</a></li>
  <li><a data-toggle="tab" href="#menu2">VIEW MY ARTICLES</a></li>
  <li><a data-toggle="tab" href="#menu3">DELETE PHOTO FROM GALERY</a></li>

</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    
    <br></br>
    
    <div class="table-responsive">
    
    <table class="table table-hover table-striped table-bordered">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>FULL NAME</th>
     <th>EMAIL</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	 
     $username=$_SESSION['username'];
	 
	 
	 $sql1="select * from tbl_publishers where username='".$username."'";
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
		 $id=$row1['id'];
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['full_name'];?></td>
         <td><?php echo $row1['email'];?></td>
         <td><button class="btn btn-success" id="Update" data-toggle="modal" data-target="#myModal<?php echo $id;?>">Update</button></td>
         
         </tr>
         
         <?php
		 
		 $i++;
		 
		 require 'Update_publisher_account.php';
		 }
	 
	 ?>

     
     
     </tbody>
    
    </table>
    </div>
 
     <br>
  </div>
  
  <div id="menu1" class="tab-pane fade">
  
  <br></br>
<!---------------------------------->

    <form method="post" action="Add_publisher_article.php" enctype="multipart/form-data">
     
      <div class="row">
     <div class="col-md-offset-2 col-md-8">
     
     <div class="col-md-6">
     
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
     <label for="subject">Subject</label>
     <input type="text" name="subject" id="subject" class="form-control">
     </div>  
     </div>
      
     
     <div class="col-md-6">
     
     <div class="form-group">
     <label for="img">Upload Image</label>
     
     <input type="file" accept="image/*" onchange="preview_image(event)" name="img">
     <img id="output_image"/>
     </div>
     
     </div>
     
     </div>
     </div>
     
     
     <div class="row">
     <div class="col-md-offset-2 col-md-8">
     <br>
     <div class="form-group">
     <label for="description">Description(Topic)</label>
     <textarea class="form-control" name="desc" id="desc" rows="10"></textarea>
     </div>
     
     <br>
     <div class="row">
      <div class="col-md-6">
      <input type="submit" class="btn btn-primary btn-block" id="submit" value="Submit">
      </div>
       <div class="col-md-6">
       <input type="reset" class="btn btn-success btn-block" id="reset" value="Reset">
       </div>
      </div>
      
     </div>
     </div>
     
     </form>
     

<!---------------------------------->   
  </div>
  
 
  <div id="menu2" class="tab-pane fade">
    
    <!------------------------------->
    
      <br></br>
      
      <div class="table-responsive">
    
    <table class="table table-hover table-striped" id="tbl_articles">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>CATEGORY</th>
     <th>SUBJECT</th>
     <th>IMAGE</th>
     <th>DESCRIPTION</th>
     <th>DATE</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	
     $username=$_SESSION['username'];
	 
	$sql1="select id, category, left(subject,100) as subject, image, left(description, 200) as description, date, username from tbl_articles where username='".$username."' order by id desc";
	
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
		 $path="Fashion_images/".$row1['image'];
		 
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['category'];?></td>
         <td><?php echo $row1['subject'];?></td>
         <td><img src='<?php echo $path;?>' width="200" height="100" class="img-responsive"></td>
         <td><?php echo $row1['description'];?></td>
         <td><?php echo $row1['date'];?></td>
  
         <td>
         <button class="btn btn-primary" id="getdata" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row1["id"]; ?>">Update</button> 
         
         <a href="Delete_publisher_article.php?sno=<?php echo $row1['id']?>"><button class="btn btn-danger" id="delete" onclick="return confirm('Are you sure you want to delete this record'); ">Delete</button></a></td>
         
         
         </tr>
         
         <?php
		 
		 $i++;
		// require 'Update_publisher_article.php';
		 
		 }
	 
	 ?>

     
     
     </tbody>
    
    </table>
    </div>
 
     <br>
  </div>
  
  
  
  <div id="menu3" class="tab-pane fade">
    
    <!------------------------------->
    
      <br></br>
      
      <div class="table-responsive">
    
    <table class="table table-hover table-striped" id="tbl_category">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>CATEGORY</th>
     <th>PHOTO</th>
     <th>PHOTO NAME</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	
     $username=$_SESSION['username'];
	 
	$sql1="select id, category, image, username from tbl_category where username='".$username."' order by id desc";
	
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
		 $path="Misc_images/".$row1['image'];
		 
		 
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['category'];?></td>
         <td><img src='<?php echo $path;?>' width="250" height="100"></td>
         <td><?php echo $path;?></td>
  
         <td>
         <a href="Delete_photo.php?sno=<?php echo $row1['id']?>"><button class="btn btn-danger" id="delete" onclick="return confirm('Are you sure you want to delete this image'); ">Delete Photo</button></a></td>
         
         
         </tr>
         
         <?php
		 
		 $i++;
		 
		 }
	 
	 ?>

     
     
     </tbody>
    
    </table>
    </div>
 
     <br>
  </div>
  
  <br></br>
   
   
  </div><!----------end first block-------->
  
</div>
</div><!----------end container----------->

  
  <br></br>
  


<!--------------------------------------------->
 
<div id="changepassword" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change my password</h4>
      </div>
      <div class="modal-body">
        
        <form method="post" action="Change_password.php" autocomplete="off">
        
        <div class="form-group">
        <label for="oldpassword">Old Password</label>
        <input type="text" class="form-control" name="oldpassword" placeholder="Enter old password">
        </div>
        
        <div class="form-group">
        <label for="newpassword">New Password</label>
        <input type="text" class="form-control" name="newpassword" placeholder="Enter new password">
        </div>
        
        
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Change Password" onclick="return confirm('Are you sure want to change your password?');">
      </div>
      
      </form>
    </div>

  </div>
</div>
 <!-----------------modal-------------------->


 
 <div id="myModal" class="modal fade" role="dialog">
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
      
      <form method="post" action="Update_publisher_article2.php" enctype="multipart/form-data">

      <div class="modal-body">
      
      <br>
      
      <div id="dynamic-content"></div>
      

        
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Update" onclick="return confirm('Are you sure want to update this record?');">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
      </form>
    </div>
    
    </div>
</div>
    

 <!------------------------------------->
 
 <?php
 require 'Footer.php';
 
 ?>
 


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() 
	{
	
    $('#tbl_articles').DataTable();
	$('#tbl_category').DataTable();
	
	new WOW().init();
} );

</script>
    
    
  </body>
</html>