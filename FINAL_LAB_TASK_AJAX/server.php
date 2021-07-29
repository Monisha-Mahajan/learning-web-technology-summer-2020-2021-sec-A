<?php

	$email = $_POST['email'];

	if($email == null){
		echo 'invalid data';
	}else{
		echo "Valid data: ".$email;	
		$conn = mysqli_connect('localhost', 'root', '', 'emailDB');
		$sql = "insert into emailDB values('$email')"; 
		$result = mysqli_query($conn, $sql);	
	}

?> 