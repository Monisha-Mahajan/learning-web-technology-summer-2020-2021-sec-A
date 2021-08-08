<?php
	
	require_once('db.php');


	function insertEmp($emp){
		$conn = getConnection();
		$sql = "insert into admin_table values(' ','{$emp['ename']}', '{$emp['pass']}')";
		 header('location: ../View/login.php');
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
function getEmp($username){
		$conn = getConnection();
		$sql = "select * from admin_table where uname = '{$uname}'";
		$result = mysqli_query($conn, $sql);
        
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
?>