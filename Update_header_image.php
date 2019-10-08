

<?php

require 'DbConnection.php';

$id=$_POST['id'];
$category=$_POST['category'];
$title=$_POST['title'];
$misc=$_POST['misc'];
$desc=$_POST['desc'];
$image=$_FILES['img']['name'];

$username=$_SESSION['username'];

if($title !="" || $misc !="" || $desc !="" || $category !="")
{
	
	if( $image !=""){
	
	$target="Header_image/";
	$targets=$target.basename($_FILES['img']['name']);
	
	$sql="Update tbl_header_image set category='".$category."', image='".$image."', title='".$title."', misc='".$misc."', description='".$desc."' where id='".$id."'";
	
	if(mysql_query($sql)){
		
		move_uploaded_file($_FILES['img']['tmp_name'], $targets);
		
		header('Location:Admin_plus.php');
		}
		
	}
	
	else{
		
		
	$sql2="Update tbl_header_image set category='".$category."', title='".$title."', misc='".$misc."', description='".$desc."' where id='".$id."'";
	
	if(mysql_query($sql2)){
		
		
		header('Location:Admin_plus.php');
		}
		
		}
	
	
	
	}else{
		
		header("Location:Admin_plus.php");
		
		}
?>