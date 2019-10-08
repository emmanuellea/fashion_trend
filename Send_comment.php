

<?php
require 'DbConnection.php';

if( isset( $_POST['user_comment'] ) )
{

$comment = $_POST['user_comment'];
$name = $_POST['user_name'];
$date=date("Y-m-d h:i:sa");

if($comment !="" || $name !=""){

$insertdata="INSERT INTO tbl_comments(name, comment, date) VALUES( '".$name."','".$comment."','".$date."' )";
mysql_query($insertdata);

}

}
else{
	
	echo "Please fill all fields";
	
	}
?>