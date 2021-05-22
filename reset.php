<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
</head>
<body>
<center>
<?php

include 'defaultstructure.html';
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST['mail'];
		$password=$_POST['password'];
		$conn= new mysqli('localhost','root','','onlineshopping');
		$sql="UPDATE users SET password='$password' WHERE email='$email'";
		
		if($conn->query($sql)===TRUE)
		{
			echo "<h3>Updated</h3>
			<img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' width='100px' height='100px'>
			";
		}
		else
		{
			echo "<h3>Error<br>".$conn->error."</h3>
			<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw1bAFhgN6yTHmdS31D9kFH7SGlst4SOVI3whTAMeXxmG_xx_l&usqp=CAU' height='100px' width='100px'>
			" ;
		}
	}
	else
	{
		$mail=$_REQUEST['mail'];
		echo "
		<form action='reset.php' method='POST'>
			<h3>Enter the new password</h3><br>
			<input class='f' type='text' name='mail' readonly value=".$mail."><br>
			<input class='f' placeholder='8 characters' name='password' required><br>
			<input type='submit' class='bttn'>
		</form>

		";
	}
?>
</center>
<style>
	.bttn{
		background:none;
		margin:10px;
		border-radius:20px;
		padding:4px;
		padding-left: 18px;
		padding-right: 18px;
		background-color: skyblue;
	}
	.f{
		border:none;
		border-bottom: 2px solid black;
		padding-left:20px;
		padding-right:20px;
		padding-bottom: 10px;
		padding-top: 10px;
		width:250px;
		border-radius: 30px;
	}
	.e{
		
	}
</style>
</body>
</html>