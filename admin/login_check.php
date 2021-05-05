<?php 
session_start();
$_SESSION['temp_email'] ='';
if(isset($_POST['submit'])){
	include_once 'includes/db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	//ERROR HANDLERS
	//CHECK IF INPUTS ARE EMPTY
	if(empty($email) || empty($password)){
		$_SESSION['msg'] = 'Please enter email and password';
		header("location: index.php");
		exit();
	}
	else{
		$sql = "SELECT * FROM student WHERE  email='$email';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			$_SESSION['temp_email'] = $email;
			$_SESSION['msg'] = 'This email doesn\'t exist';
			header("location: index.php");
			// header("location: index.php?error=loginError");
			exit();
		}
		else{
			if($row = mysqli_fetch_assoc($result)){
				//DE-HASH PASSWORD
				$hashedPasswordCheck = password_verify($password, $row['password']);

				// if ($hashedPasswordCheck == false) {
				// 	header("location: login.php?error=passwordError");
				// 	exit();
				// }
				// elseif($hashedPasswordCheck == true){
				// 	//LOGGING IN THE USER
				// 	$_SESSION['firstname'] = $row['firstname'];
				// 	$_SESSION['lastname'] = $row['lastname'];
				// 	$_SESSION['email'] = $row['email'];
				// 	header("location: dashboard.php");
				// 	exit();
				// }
				if($password!=$row['password']){
					$_SESSION['msg'] = 'incorrect password';
					header("location: index.php");
					// header("location: login.php?error=passwordError");
					exit();
				}elseif($password == $row['password'])
				{
					//LOGGING IN THE USER
					unset($_SESSION['temp_email']);
					$_SESSION['firstname'] = $row['first_name'];
					$_SESSION['lastname'] = $row['last_name'];
					$_SESSION['email'] = $row['email'];
					header("location: dashboard.php");
				}
			}
			else{
				$_SESSION['msg'] = 'incorrect password';
				header("location: index.php");
				// header("location: index.php?error=UsernameOrPasswordError");
			}
		}
	}
}
else{
	$_SESSION['msg'] = 'login ERRRROR';
	header("location: index.php");
	// header("location: index.php?error=loginError");
		exit();
}