<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<fieldset style ="margin: 0px 480px ;">
		<legend>LOGIN</legend>
		<form>
			<table>
			<tr>
				<td><b>User Id</td>
				<td><input type="text" name="id" value=""></td>
			</tr>
			<tr>
            	<td colspan=2><br></td>
            </tr>
			<tr>
				<td><b>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
            	<td colspan=2><br></td>
            </tr>
			<tr>
                <td colspan=2>
                	<input type="checkbox" name="Remember" value=""> Remember Me
                </td>
            </tr>
                        
            <tr>
            	<td colspan=2><hr></td>
            </tr>
            <tr>
            	<td>
            		<input type="submit" name="Login" Value="Login" style="width: 90px; height: 30px;">
            	</td>
            	<td>
            		<a href="../registration.php">Register</a>
            	</td>
            </tr>
			</table>
		</form>
		
	</fieldset>
</body>
</html>