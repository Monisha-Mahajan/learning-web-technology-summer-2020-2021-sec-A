<?php

	session_start();

	if ($_SESSION['flag']) {
		$id = $_SESSION['id'];
		$password = $_SESSION['password'];

		$conn = mysqli_connect('localhost', 'root', '', 'miniProject');
		$sql = "select name from registration where id = '$id' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_assoc($result);
		
	}

?>

<center>
	<h1>Welcome <?php echo $name['name']; ?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="changePassword.html">Change Password</a>
	<br/>
	<a href="login.html">Logout</a>
</center>