<?php
include 'defaultstructure.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Activate Account</title>
</head>
<body>
<center>
<br><br><br>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST['mail'];
		$to_email = $email;
			$subject = "Password Reset: Shop India";
			$body = "Here is your Account Activation link
			
			".$_SERVER['HTTP_HOST']."/shopindia.in/jafbvjbqejhvbjhqebvobdkjfgibweoibgriwigbwiebgijbwekjgbkwbppouqenribguqer.php?email=".$email."
			Stay Connected With us for further hepl";
			$headers = "From: innovationtechnologiespvtltd@gmail.com";
			echo "<h3>Activation link send to your mail<h3>";
			if(mail($email, $subject, $body, $headers))
			{
				echo "<br><img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' height='100px' width='100px'><br><h3>Status: <b style='color:lime'>Mail Sent Successfully</b></h3>";
			}
			else {
				echo "<br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw1bAFhgN6yTHmdS31D9kFH7SGlst4SOVI3whTAMeXxmG_xx_l&usqp=CAU' height='100px' width='100px'><h3><br>Staus: <b style='color:red'><b>Mail not Sent due to some issue</b></h3>";
			}
	}
	else
	{
		$mail=$_REQUEST['mail'];
		echo "
		<h3>Please Activate Your Account</h3>
<h5>Activation link is send to your mail id at the time of register</h5>
		<form action='activate.php' method='POST'>
			<input class='f' type='text' name='mail' readonly value=".$mail."><br>
			<input type='submit' class='bttn' value='Resend link'>
		</form>

		";
	}
?>
</center>

<style type="text/css">
	.f{
		border:none;
	}
	.bttn{
		background:none;
		margin:10px;
		border-radius:20px;
		padding:4px;
		padding-left: 18px;
		padding-right: 18px;
		background-color: skyblue;
	}
</style>

</body>
</html>