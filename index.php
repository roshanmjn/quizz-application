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
		// header("location: index.php");
		// exit();
	}
	else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$_SESSION['msg'] = 'Please enter a valid email address';
		}
		else{
			$sql = "SELECT * FROM student WHERE  email='$email';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				$_SESSION['msg'] = 'This email doesn\'t exist';
				// header("location: index.php");
				// header("location: index.php?error=loginError");
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					if($password!=$row['password']){
						$_SESSION['msg'] = 'incorrect password';
						// header("location: index.php");
						// header("location: login.php?error=passwordError");
						// exit();
					}
					elseif($password == $row['password']){
						//LOGGING IN THE USER
						$_SESSION['firstname'] = $row['first_name'];
						$_SESSION['lastname'] = $row['last_name'];
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
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="css/index.css">
 </head>
 <body>
 	<div class="heading">
 		<p class="title">ONLINE EXAMINATION SYSTEM</p>
 	</div>
 	<div class="container">
	 	<div class="rules">
			<h2>Ways to login:</h2>
			<ul>
				<li>The user id is given by the institute.</li>
				<li>New user account can be created for new access.</li>
				<li>New user account can be created for new access.</li>
				<li>New user account can be created for new access.</li>
				<li>New user account can be created for new access.</li>
			</ul>
		</div>
	
		<div class="form">

		<!--ERROR MESSAGE PANEL START-->
		<?php if(isset($_SESSION['msg'])){ ?>
			<div class="red-text">
				<p><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></p>
			</div>
 		<?php }elseif(isset($_SESSION['success'])){ ?>
 			<div class="green-text">
				<p><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
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
			<!--FORM ENDS -->

			<!--BUTTON STARTS -->
				<div class="login">
					<input class="form-button" type="submit" name="submit" value="Log In">
				</div>

				<div class="seperator"></div>

	 			<div class="button-link">
	 				<a href="signup.php">Create New Account</a>
				</div>
			<!--BUTTON ENDS -->
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