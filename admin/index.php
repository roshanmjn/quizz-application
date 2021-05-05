 <?php 
 session_start();
 if(isset($_SESSION['email'])){
 	header('location:dashboard.php');
 }

if(isset($_POST['submit'])){
	include_once 'includes/db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//ERROR HANDLERS
	//CHECK IF INPUTS ARE EMPTY
	if(empty($email) || empty($password)){
		$_SESSION['msg'] = 'Please enter email and password';
	}
	else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$_SESSION['msg'] = 'Please enter a valid email address';
		}
		else{
			$sql = "SELECT * FROM admin WHERE  email='$email';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				$_SESSION['msg'] = 'Account with this email doesn\'t exist';
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					if($password!=$row['password']){
						$_SESSION['msg'] = 'Password incorrect';
					}
					elseif($password == $row['password']){
						//LOGGING IN THE USER
						$_SESSION['name'] = $row['name'];
						$_SESSION['email'] = $row['email'];
						header("location: dashboard.php");
					}
				}
			}
		}
	}
}
?>
 <html>
 <head>
 	<title>Online Examination</title>
 	<link rel="stylesheet" href="css/index.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
 </head>
 <body>
<div class="heading">
	<p class="title">ONLINE EXAMINATION SYSTEM</p>
</div>

<div class="container">
	<div class="form">
		<div class="heading2">
			<p class="animation">Admin Login</p>
		</div>

		<div class="seperator"></div>

		<!--ERROR MESSAGE PANEL START-->
		<?php if(isset($_SESSION['msg'])){ ?>
		<div class="red-text">
			<p><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></p>
		</div>
 		<?php } ?>	
 		<!--ERROR MESSAGE PANEL END-->
 		<!--FORM STARTS -->
		<form action="" method="post" class="form-inside">
			<div class="username">
				<input class="form-input" type="text" name="username" placeholder="Username or Email" value="<?php if(!empty($_POST['username'])){echo $_POST['username'];} ?>" autocomplete="" autofocus>
			</div>

			<div class="password">
				<input class="form-input" type="password" name="password" placeholder="Password">
			</div>
			
			<div class="seperator"></div>

			<div class="login">
				<input class="form-button" type="submit" name="submit" value="Log In">
			</div>
 		</form>	
	</div>
</div>
<div class="footer">
	<p>
		Name of Institute &copy 2021. All Rights Reserved. Created by ASD.
	</p>
</div>

</body>
</html>