


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">FashionVilla</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav">
        <li><a href="Admin.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="Admin_plus.php">Admin Plus <span class="sr-only">(current)</span></a></li>
        <li><a href="Upload_admin.php">Photos</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
        <?php
       
	   
		if($_SESSION['username'])
		{
			echo "Welcome, ".$_SESSION['username'];
			}
			
		
			
		?>
        </a></li>
        
       
          <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        
      </ul>
    </div>
  </div>
</nav>