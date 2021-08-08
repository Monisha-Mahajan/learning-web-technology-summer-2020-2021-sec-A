<?php


	if(isset($_POST['submit'])){

		$password = $_POST['password'];
		$name = $_POST['name'];
		$cname = $_POST['cname'];
		$contact_no = $_POST['cpntactno'];
		$user_name = $_POST['uname'];


		if($password == "" || $name == "" || $cname == "" || $contact_no == "" || $user_name == ""){
			echo "null submission...";
		}else{
				$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
				$sql = "insert into employee_table values(' ', '$password', '$cpassword', '$name', '$email', '$type')"; 
				$result = mysqli_query($conn, $sql);

				header('location: ../view/login.html');
			}
		}
?>