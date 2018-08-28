<?php
	include("dbconfig.php");
	
	$name=$_POST['name'];
	//echo $name;
	//echo "<br>";  
	$money=$_POST['money'];
	//echo "<br>";  
	$result= $name * $money;
	//echo $money;
	
	$sql="insert into tweet(user, money, result)
	values('$name','$money','$result')";
	
	mysqli_query($con1,$sql);
	
	header("lOcation: price.php");
	
?>
