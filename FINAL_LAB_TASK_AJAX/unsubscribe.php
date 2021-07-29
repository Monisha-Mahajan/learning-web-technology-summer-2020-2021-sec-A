<?php

	$email = $_POST['email'];

	$conn = mysqli_connect('localhost', 'root', '', 'emailDB');
	$sql = "select* from emailDB where email='$email'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows==1) {
		$row=mysqli_fetch_assoc($result);
		$eml=$row['email'];

			if($email == $eml){
				echo "Valid data: ".$email;	
				$conn = mysqli_connect('localhost', 'root', '', 'emailDB');
			    $sql = "delete from emailDB where email='$email'";
	            $result = mysqli_query($conn, $sql);
			
				
			}
	}
	else{
		echo"Not found";
	}

?> 