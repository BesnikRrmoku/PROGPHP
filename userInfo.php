<?php

	include_once('db.php');
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$sql = "INSERT INTO admini1 VALUES('', '$name','$age')";
	
	if(mysqli_query($db, $sql))
		echo "Success";
	else
		echo "Failed";
		?>