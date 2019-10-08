<?php

require "DbConnection.php";

$sno=$_REQUEST['sno'];

$sql="delete from tbl_news_letter where id='".$sno."'";
$result=mysql_query($sql);

if($result)
{
	
	header('Location:Admin_plus.php');
	}
	else
	{
		header('Location:Admin_plus.php');
		}


?>