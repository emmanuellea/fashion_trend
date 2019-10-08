<?php

require "DbConnection.php";

$sno=$_REQUEST['sno'];

$sql="delete from tbl_comments where id='".$sno."'";
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