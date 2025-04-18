<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
	<title>SHREE AMRUTHESHWARA TEMPLE| REGISTER</title>
	<!-- Stylesheets -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

		* {
			box-sizing: border-box;
		}

		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
		}

		h1 {
			font-weight: bold;
			margin: 0;
		}

		h2 {
			text-align: center;
		}

		p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		span {
			font-size: 12px;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		button {
			border-radius: 20px;
			border: 1px solid #FF4B2B;
			background-color: #FF4B2B;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
			cursor: pointer;
		}

		button:active {
			transform: scale(0.95);
		}

		button:focus {
			outline: none;
		}

		button.ghost {
			background-color: transparent;
			border-color: #FFFFFF;
		}

		form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;
		}

		input {
			background-color: #eee;
			border: none;
			padding: 12px 15px;
			margin: 8px 0;
			width: 100%;
		}

		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
				0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 480px;
		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
		}

		.sign-in-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.container.right-panel-active .sign-in-container {
			transform: translateX(100%);
		}

		.sign-up-container {
			left: 0;
			width: 50%;
			opacity: 0;
			z-index: 1;
		}

		.container.right-panel-active .sign-up-container {
			transform: translateX(100%);
			opacity: 1;
			z-index: 5;
			animation: show 0.6s;
		}

		@keyframes show {

			0%,
			49.99% {
				opacity: 0;
				z-index: 1;
			}

			50%,
			100% {
				opacity: 1;
				z-index: 5;
			}
		}

		.overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 100;
		}

		.container.right-panel-active .overlay-container {
			transform: translateX(-100%);
		}

		.overlay {
			background: hsl(35, 100%, 50%);
			background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
			background: linear-gradient(to right, hsl(35, 100%, 50%), #FF416C);
			background: linear-gradient(to left, hsl(35, 100%, 50%), #FF416C);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			color: #FFFFFF;
			position: relative;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.container.right-panel-active .overlay {
			transform: translateX(50%);
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.overlay-left {
			transform: translateX(-20%);
		}

		.container.right-panel-active .overlay-left {
			transform: translateX(0);
		}

		.overlay-right {
			right: 0;
			transform: translateX(0);
		}

		.container.right-panel-active .overlay-right {
			transform: translateX(20%);
		}

		.social-container {
			margin: 20px 0;
		}

		.social-container a {
			border: 2px solid hsl(35, 100%, 50%);
			border-radius: 50%;
			display: inline-flex;
			justify-content: center;
			align-items: center;
			margin: 0 5px;
			height: 40px;
			width: 40px;
		}
	</style>
</head>

<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form  method="post" action="#" >
				<h1>Create Account</h1>

				<span>or use your email for registration</span>
				<input type="text" name="name" required placeholder="Name" />
				<input type="text" name="contact"  required placeholder="Contact No." />
				<input type="email" name="email"  required placeholder="Email" />
				<input type="password" name="password"  required placeholder="Password" />
				<button type="submit" name="signup" > Sign Up</button>
			</form>
			<?php
if(isset($_POST['signup']))
{
	
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];

	$sql = "select * from user where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='register.php'; </script>";
	}
	else
	{
		
		$name=$_POST['name'];
		$contact=$_POST['contact'];
	    $email=$_POST['email'];
		$password=$_POST['password'];
		

		$query = "INSERT INTO user(name,contact,email,password) VALUES('".$name."','".$contact."','".$email."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='register.php'; </script>";

	}
}
?>
		</div>
		<div class="form-container sign-in-container">
			<form  method="post" action="#" >
				<h1>Sign in</h1>

				<span>or use your account</span>
				<input name="email" type="email" required placeholder="Email" />
				<input name="password" type="password" required placeholder="Password" />

				<button name="signin" type="submit">Sign In</button>
			</form>
 <?php
if(isset($_POST['signin']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "select * from user where email='".$email."' and password='".$password."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['templeuser']=$email;
		$uid=$_SESSION['templeuser'];
		echo "<script>
				alert('Login Successful $uid');
			</script>";
		echo "<script> location.href='afterlogin/home.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}

?>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<<div class="overlay-panel overlay-left" style="background: linear-gradient(to right, hsl(35, 100%, 50%), #FF416C);background: linear-gradient(to right, hsl(35, 100%, 50%), #FF416C);">
					<h1>Delighted to see you again!!</h1>
					<p>Already have an account???<br>Login to join us again!</p>
					<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right" style="background: linear-gradient(to  right, hsl(35, 100%, 50%), #FF416C);background: linear-gradient(to right, hsl(35, 100%, 50%), #FF416C);">
				<h1>Namasthe!!!</h1>
				<p>Don't have an account yet???<br>Enter the following details to discover our Holy Path!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
	</div>


	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

	

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});

		
	</script>
</body>

</html>
