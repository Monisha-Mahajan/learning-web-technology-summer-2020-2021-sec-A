<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['signup'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$email 		= $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";  
		}else{
			if($password == $repass){

				$user = [	
							'username'	=> $username, 
							'password'	=> $password, 
							'email'		=>$email, 
							'type'		=>'user'
						];
				
				$status = insertUser($user);				

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "error..try again";
				}

			}else{
				echo "password & confirm password are not same...";
			}
		}
	}


?>