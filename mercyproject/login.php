<?php 
session_start();
error_reporting(0);
include 'db.php';

#eror array


if ($conn == false){
    die("OGA check your database connection" . mysqli_connect_error()) ;
}

#form check
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$pasword = $_POST["password"];

	$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pasword."'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

if($row["usertype"] === "admin"){
	$_SESSION["email"] = $email;
	$_SESSION["usertype"] = "admin";


    header("location:admin2.php");
}
elseif ($row["usertype"] === "client") {

	$_SESSION["email"] = $email;
	$_SESSION["usertype"] = "admin";

	header("location:client.php");
}

else {
	echo " Incorrect email & password ...Please check the input";
}
}
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login to Dashboard</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div><php
	echo $error;

?></div>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div><?php echo $errors['eml'];?>
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" placeholder="Email" name="email" >
				</div>

				<div class="login__field">
				
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">
				</div>

				<button class="button login__submit" name="submit" value="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	

			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
