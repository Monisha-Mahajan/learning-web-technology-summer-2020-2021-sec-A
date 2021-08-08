<?php


	if(isset($_POST['submit'])){

		$password = $_POST['password'];
		$name = $_POST['name'];

		if($id == "" || $password == "" || $name == ""){
			echo "null submission...";
		}else{
				$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
				$sql = "insert into admin_table values(' ', '$name', '$password')"; 
				$result = mysqli_query($conn, $sql);

				header('location: ../view/login.html');
		}

	}
?>