<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Shopindia Login</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mysqli= new mysqli('localhost','root','','onlineshopping');
		$result= $mysqli->query("SELECT firstname,lastname,password,gender,active FROM users WHERE email='$email'");
		if($result->num_rows==0)
		{
			$error="Email or Password is Incorrect!";
		}
		else
		{
			$row=$result->fetch_assoc();
			if($password==$row['password'])
			{
				if($row['active']==0)
				{
					
					$error="Activate Your Account";
					header('Location: activate.php?mail='.$email);
					
				}
				else
				{
					$error="";
					session_start();
					$_SESSION['user']=$row['firstname'];
					$_SESSION['gender']=$row['gender'];
					header('Location: index.php');
				}
			}
			else
			{
				$error="Email or Password is Incorrect";
			}
		}

	}
	else
	{
				$error="";
	}
?>
<body>
    <div class="container-fluid ">
        
                <div class=" no-pdding login-box">
                    <div class="row no-margin w-100 bklmj">
                        <div class="col-lg-6 col-md-6 log-det">
                            
                            <h1><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU" height="30" width="30">Shopindia Login</h1>
                            
                           
                            <div class="row no-margin past">
                                <p>Dont Have an Account? <a href="register.php" style="color:red;">Sign Up Now</a></p> </p>
                            </div>

							<form action="login.php" method="POST">
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                   
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required name="email">
                                </div>
                                 <div class="input-group mb-3">
                                    
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required name="password">
                                </div>
                                <div class="row no-margin">

                                	<p style='color:red;'><?php echo $error?></p>
                                    <a href='forgetpassword.php' style='text-decoration:unset;'><p class="forget-p">Forget Password ?</p>
                                </div>
                                <div class="right-bkij mb-3">
                                    <button class="btn btn-success btn-round">Sign In</button>
                                </div>  
                                <br> 
                                
                            </div>
                            
                             

                    </div>
                </div>
            </div>
            </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>
