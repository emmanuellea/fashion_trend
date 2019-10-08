<?php


require 'DbConnection.php';

if(isset($_POST['newsletter']))
{
  $email=$_POST['newsletter'];
  
  $insert=mysql_query("insert into tbl_news_letter(email) values('".$email."')");
  
 
  if($insert)
  {
	  echo "Message sent successfully";
  }
exit;
}

?>