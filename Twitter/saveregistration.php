<?php
	include("dbconfig.php");
	
	$user=$_POST['user'];
	//echo $user;
	$comment=$_POST['comment'];
	//echo $username;
	$ipaddress=$_SERVER['REMOTE_ADDR'];
	
	
	$sql="insert into tweet(user,comment,ipaddress)
	values('$user','$comment','$ipaddress')";
	
	mysqli_query($con1,$sql);
	
	header("location: http://localhost/Vedantu/twitter/twitter.com/Twitter/ajax.js");
	
?>