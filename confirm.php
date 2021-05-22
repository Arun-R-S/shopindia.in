<!DOCTYPE html>
<html>
<head>
	
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU">
</head>
<body>

<?php
	include 'defaultstructure.html';

	$report="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$gender=$_POST['gender'];
		$password=$_POST['password'];
		$state=$_POST['state'];
		
		$mysqli= new mysqli('localhost','root','','onlineshopping');
		$result= $mysqli->query("SELECT firstname FROM users WHERE email='$email'");
		if($result->num_rows==0)
		{
		
			$db=mysqli_connect('localhost','root','');
			mysqli_select_db($db,'onlineshopping');
			$sql = "INSERT INTO users (firstname,lastname,email,mobile,password,gender,state) VALUES('$fname','$lname','$email','$mobile','$password','$gender','$state')";

			mysqli_query($db,$sql);
			
			$myfile = fopen("Databases/".$fname." ".$lname." ".$email.".txt", "w") or die("Unable to open file!");
			$txt="Username :".$fname." ".$lname."\nEmail :".$email."\nPhone Number :".$mobile."\nGender :".$gender."\nState :".$state."\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			
			echo "<title>Welcome</title><center><p>Hello ".$fname."</p><p><We Welcomes you for Innovation Technologies></p>";
			echo "<p>We have send a confirmation mail to ".$email."<br></p>";
			echo "<p>Please Activate Your Account";
			echo "<title>Welcome ".$fname."</title>";
			echo "<style>body{color:black;justify-content:center;}</style>";
			echo "<style>p{font-size:30px;justify-content:center;}</style>";


			$to_email = $email;
			$subject = "Mail Confirmation from Shop India";
			$body = "Hi ".$fname." ".$lname.",This is Arun from Shop India Pvt.ltd,Singipuram,Valappady,Salem 
			Thank You for Creating an Account in Shopindia.in
			Please Click the below link to Activate Your Account
			
			".$_SERVER['HTTP_HOST']."/shopindia.in/jafbvjbqejhvbjhqebvobdkjfgibweoibgriwigbwiebgijbwekjgbkwbppouqenribguqer.php?email=".$email."
			Stay Connected With us for further hepl";
			$headers = "From: innovationtechnologiespvtltd@gmail.com";

			if(mail($email, $subject, $body, $headers))
			{
				echo "<br><img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' height='100px' width='100px'><br>Status: <b style='color:lime'>Mail Sent Successfully</b></p>";
			}
			else {
				echo "<br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw1bAFhgN6yTHmdS31D9kFH7SGlst4SOVI3whTAMeXxmG_xx_l&usqp=CAU' height='100px' width='100px'><br>Staus: <b style='color:red'><b>Mail not Sent due to some issue</b></p>";
			}
		}
		else{
			echo "<br><br><center><h3>Mail Already registered<br>Try to use a different mail id</h3><img src='https://cdn3.iconfinder.com/data/icons/emoji-63/32/emoticon-06-512.png' width='100px' height='100px'></center>";
		}
	}
	else
	{
		echo "<title>Warning</title>";
		$ip=getHostByName(getHostName());
		echo "<br><br><center><h1 style='color:red'>Unauthorized Entry to this site<br>Session Expired<br></h1>";
		echo "<h1>IP     :".$ip."</h1><br>";
		echo "<h1>Server :".$_SERVER['HTTP_HOST']."</h1><br>";
	}
?>

</body>
</html>