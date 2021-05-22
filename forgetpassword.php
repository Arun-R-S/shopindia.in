<?php
include 'defaultstructure.html';
$error="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
<center>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST['email'];
		$mysqli= new mysqli('localhost','root','','onlineshopping');
		$result= $mysqli->query("SELECT firstname FROM users WHERE email='$email'");
		if($result->num_rows==0)
		{
			$error="Your Mail is not registered with us!";
			echo "<br><br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw1bAFhgN6yTHmdS31D9kFH7SGlst4SOVI3whTAMeXxmG_xx_l&usqp=CAU' height='100px' width='100px'>";
		}
		else
		{
			

			$to_email = $email;
			$subject = "Password Reset: Shop India";
			$body = "Here is your password reset link
			
			".$_SERVER['HTTP_HOST']."/shopindia.in/reset.php?mail=".$email."
			Stay Connected With us for further hepl";
			$headers = "From: innovationtechnologiespvtltd@gmail.com";
			echo "<h3>We have send a password reset link to your mail<h3>";
			if(mail($email, $subject, $body, $headers))
			{
				echo "<br><img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' height='100px' width='100px'><br><h3>Status: <b style='color:lime'>Mail Sent Successfully</b></h3>";
			}
			else {
				echo "<br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw1bAFhgN6yTHmdS31D9kFH7SGlst4SOVI3whTAMeXxmG_xx_l&usqp=CAU' height='100px' width='100px'><h3><br>Staus: <b style='color:red'><b>Mail not Sent due to some issue</b></h3>";
			}
		}
	}
	else
	{
		echo "<p>Did you forget password?</p>
		<h4>Enter Your Mail id</h4>
		<form action='forgetpassword.php' method='POST'>
			<input class='f' type='text' pattern='^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$' name='email' required><br>
			<button class='bttn'>Submit</button>
			</form>

		";
	}
?>
<?php
	echo "<h3 class='e'>".$error."</h3>";
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