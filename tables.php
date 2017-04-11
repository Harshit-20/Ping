<?php
	$user='root';
	$pass='';
	$db='ping';
	$rn = $_POST["rollnum"];
	$fn = $_POST["fname"];
	$ln = $_POST["lname"];
	$email = $_POST["email"] ;
	$pass = $_POST["password"];
	$sem = $_POST["semester"];
	$branch = $_POST["branch"];
	$pn = $_POST["phonenum"];
	include('abc/index.php');

	mysql_query("INSERT INTO users(rollnum,fname,lname,email,password,semester,branch,phonenum)	
	VALUES('$rn','$fn','$ln','$email','$pass','$sem','$branch','$pn')");
		 
		
?>	