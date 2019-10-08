<?php


require 'DbConnection.php';

if(isset($_POST['fullname']) && isset($_POST['uemail']) && isset($_POST['umessage']))
{
  $fullname=$_POST['fullname'];
  $email=$_POST['uemail'];
  $message-$_POST['umessage'];
  $date=date("Y-m-d h:i:sa");
  
  $insert=mysql_query("insert into tbl_messages(name, email, message, date) values('".$fullname."','".$email."', '".$message."', '".$date."')");
  
 
  if($insert)
  {
	  echo "Message sent successfully";
  }
exit;
}

?>