<?php

require "DbConnection.php";

$sno=$_REQUEST['sno'];

$sql="delete from tbl_category where id='".$sno."'";
$result=mysql_query($sql);

if($result)
{
	
	header('Location:Publisher_main.php');
	}
	else
	{
		header('Location:Publisher_main.php');
		}


?>