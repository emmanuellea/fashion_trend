
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
	   
	
	$(document).ready(function(){
		
	$(document).on('click', '#getdata', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); 
  
     $('#dynamic-content').html('');
     /*$('#modal-loader').hide();*/ 
 
     $.ajax({
          url: 'Header_image_modal.php',
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
		width:300px;
		height:150px;
		
		}
	
    </style>
  </head>
  <body>
  
 
 <?php require 'Header_admin.php';?>
 
 <br></br>

<div class="container" id="container">

<div id="first1">
   <div id="heading-block">
   <h4>Admin Account Administration</h4>
   </div>
   </div>
   </div>
   
   <br></br>
   
   <div class="container" id="container">
   
   <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">HEADER IMAGE</a></li>
  <li><a data-toggle="tab" href="#menu1">UPDATE HEADER IMAGE</a></li>
  <li><a data-toggle="tab" href="#menu2">COMMENT</a></li>
  <li><a data-toggle="tab" href="#menu3">MESSAGES</a></li>
  <li><a data-toggle="tab" href="#menu4">NEWSLETTER SUBSCRIPTIONS</a></li>

</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    
    <br></br>
    
    <div class="table-responsive">
    
    <table class="table table-hover table-striped table-bordered" id="tbl_header">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>CATEGORY</th>
     <th>IMAGE</th>
     <th>TITLE</th>
     <th>DESCRIPTION</th>
     <th>MISC</th>
     <th>UPDATE</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	 
     
	 $sql1="select id, title, category, misc, image, left(description, 120) as description from tbl_header_image";
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
		$path2="Header_image/".$row1['image'];
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['category'];?></td>
          <td><img src='<?php echo $path2;?>' width="150" height="50"></td>
         <td><?php echo $row1['title'];?></td>
         <td><?php echo $row1['description'];?></td>
         <td><?php echo $row1['misc'];?></td>
        
         <td><button class="btn btn-primary" id="getdata" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row1["id"]; ?>">Update Record</button>
                  </td>
         
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
  
  <div id="menu1" class="tab-pane fade">
  
  <br></br>
<!---------------------------------->

    <form method="post" action="Add_header_image.php" enctype="multipart/form-data">
     
     <div class="row">
     <div class="col-md-offset-3 col-md-6">
     
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
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
    </div>
    
    <div class="form-group">
    <label for="dsec">Description</label>
    <input type="text" name="desc" class="form-control" placeholder="Enter some text">
    </div>
    
    <div class="form-group">
    <label for="misc">Some small text</label>
    <input type="text" name="misc" class="form-control" placeholder="Enter some text">
    </div>
     
     <div class="form-group">
     <label for="img">Upload Image</label>
     
     <input type="file" accept="image/*" onchange="preview_image(event)" name="img">
     <img id="output_image"/>
     </div>
     
     <div class="row">
     <div class="col-md-6">
     <input type="submit" name="submit" value="Update Record" class="btn btn-primary btn-block">
     
     </div>
 
     <div class="col-md-6">
     <input type="reset" name="reset" value="Reset" class="btn btn-success btn-block">
     
     </div>
     </div>
     
     </div>
     </div>
     
     
     </form>
       
  </div>
  
 
  <div id="menu2" class="tab-pane fade">
    
  
    
      <br></br>
      
      <div class="table-responsive">
    
    <table class="table table-hover table-striped" id="tbl_comments">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>NAME</th>
     <th>COMMENT</th>
     <th>DATE</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	
     
	$sql1="select * from tbl_comments order by id desc";
	
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
	
		 
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['name'];?></td>
         <td><?php echo $row1['comment'];?></td>
         <td><?php echo $row1['date'];?></td>
         
  
         <td><a href="Delete_comment.php?sno=<?php echo $row1['id']?>"<button class="btn btn-danger" id="delete" onclick="return confirm('Are you sure you want to delete this comment'); ">Delete</button></a></td>
         
         
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
  
    <div id="menu3" class="tab-pane fade">
    
    <br></br>
    
    <div class="table-responsive">
    
    <table class="table table-hover table-striped table-bordered" id="tbl_messages">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>NAME</th>
     <th>EMAIL</th>
     <th>MESSAGE</th>
     <th>DATE SUBMITTED</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	 
     
	 $sql1="select * from tbl_messages order by id desc";
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
	
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['name'];?></td>
         <td><?php echo $row1['email'];?></td>
         <td><?php echo $row1['message'];?></td>
         <td><?php echo $row1['date'];?></td>
         <td><a href="Delete_message.php?sno=<?php echo $row1['id']?>"<button class="btn btn-danger" id="delete" onclick="return confirm('Are you sure want to delete this message?');">Delete Email</button></a></td>
         
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
  
  
  <div id="menu4" class="tab-pane fade">
    
    <br></br>
    
    <div class="table-responsive">
    
    <table class="table table-hover table-striped table-bordered" id="tbl_newsletter">
    
    <thead>
     <tr>
     <th>SNO</th>
     <th>EMAIL</th>
     <th>ACTION</th>
     </tr>
     </thead>
     
     <tbody>
     
     
     <?php
	 
     
	 $sql1="select * from tbl_news_letter order by id desc";
	 $result1=mysql_query($sql1);
	 
	 $i=1;
     while($row1=mysql_fetch_assoc($result1))
	 {
	
		 ?>
         
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row1['email'];?></td>
         <td><a href="Delet_newsletter.php?sno=<?php echo $row1['id']?>"<button class="btn btn-danger" id="delete" onclick="return confirm('Are you sure want to delete this email?');">Delete message</button></a></td>
         
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
  
 <?php
 require 'Footer.php';
 
 ?>
 
 <br></br>
 
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
      
      <form method="post" action="Update_header_image.php" enctype="multipart/form-data">

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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() 
	{
	
    $('#tbl_header').DataTable();
	 $('#tbl_comments').DataTable();
	  $('#tbl_messages').DataTable();
	   $('#tbl_newsletter').DataTable();
	
	new WOW().init();
} );

</script>
    
    
  </body>
</html>