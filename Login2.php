<?php

require 'DbConnection.php';

$username=mysql_real_escape_string($_POST['username']);
$cpassword=mysql_real_escape_string($_POST['password']);

//$usernames=md5($cusername);
//$password=md5($cpassword);

$_SESSION['username']=$username;


if($username !="" && $cpassword !=""){

$sql="select username from tbl_user where username='".$username."'";
$result=mysql_query($sql);

if(mysql_num_rows($result)>0){

while($row=mysql_fetch_assoc($result)){
	
	$usernamz=$row['username'];
	
	}
	
	if($usernamz=="Admin"){
		
		$sql2="select * from tbl_user where username='".$username."' AND password='".$cpassword."'";
		$result2=mysql_query($sql2);
			
			if(mysql_num_rows($result2)>0)
			{
				header("Location:Admin.php");
				}
				else{
					
					header("Location:Login.php");
					
					}
		
		}
		else if($usernamz !="Admin"){
			
			$sql3="select * from tbl_user where username='".$username."' AND password='".$cpassword."'";
			$result3=mysql_query($sql3);
			
			if(mysql_num_rows($result3)>0)
			{
				header("Location:Publisher_main.php");
				}
				else{
					
					header("Location:Login.php");
					
					}
			
			}
			
	
}
else{
	
	header("Location:Login.php");
	}
	
	}
	
	else{
		
		header("Location:Login.php");
		
		}
	
	

?>