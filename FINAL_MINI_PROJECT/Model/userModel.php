<?php
	require_once('DB_config.php');
	
	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from registration where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from registration";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function insertUser($id, $password, $conpassword, $name, $email, $type){
		$conn = getConnection();
		$sql = "insert into registration (id, password, conpassword, name, email, type) values ('$id', '$password', 
		'$conpassword', '$name', '$email', '$type')";
		mysqli_query($conn, $sql);
		
	}

?>