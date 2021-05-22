<!DOCTYPE html>
<html>
<head>
	<title>Activate Account</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU">
</head>
<body>
<center>
<?php
include 'defaultstructure.html';
$email=$_REQUEST['email'];

if($email=="")
{
	echo "Session Expired";
}
else
{
$db =mysqli_connect("localhost","root",'',"onlineshopping");
   if(! $db ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT `active` FROM `users` WHERE `email`='$email'";
   $result=$db->query($sql);
   $row=$result->fetch_assoc();
   if($row['active']==1 ) {
      echo "<h3 class='r'>Already Activated<h3><br><img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' height='100px' width='100px'>";
   }
   else{
		$db=mysqli_connect('localhost','root','');
		mysqli_select_db($db,'onlineshopping');
		$sql = "UPDATE `users` SET `active` = '1' WHERE `email` = '$email'";
		mysqli_query($db,$sql);
		echo "<h3 class='r'>Account Activated<h3>
		<img src='https://martielbeatty.com/wp-content/uploads/2018/03/green-tick-png-green-tick-icon-image-14141-1000.png' height='100px' width='100px'>
		";
   }
}
?>
<style>


</style>
</center>
</body>
</html>