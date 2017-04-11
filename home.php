<?php
	$u = $_POST['username'];
	$p = $_POST['password'];
	if($u != "harshit"){
		echo"<a href=login.php>Invalid Username</a>";
	}
	else if($p != "choubey"){
		echo"<a href=login.php>Invalid Password</a>";
	}
	else 
		echo"<a href=#>Welcome Home</a>";
?>