<?php 


if(isset($_POST['submit'])){
	
	include_once('includes/db.inc.php');

	$firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
	$lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	$username = mysqli_real_escape_string($conn, $_POST["username"]);
	$password = mysqli_real_escape_string($conn, $_POST["password"]);
	// $date = $_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
	$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
	$faculty = mysqli_real_escape_string($conn, $_POST["faculty"]);
	
	

	//check if names are empty
	if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($gender)) {
		header("location: signup.php?error=Empty Fields");
		exit();
		
	}else{
		//CHECK IF NAME ALPHABET ONLY
		if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname)){
			header('location: signup.php?error=Invalid Name');
			exit();
		}
		else{
		//CHECK IF EMAIL FORMAT IS VALID OR NOT
			ucwords($firstname);
			ucwords($lastname);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("location: signup.php?error=Invalid Email");
				exit();
			}
			else{
				//CHECK IF EMAIL ALREADY EXISTS OR NOT
				$sql = "SELECT * FROM users WHERE email='$email'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0){
					header("location: signup.php?error=Email Already Exists");
					exit();
				}
				else{
					//HASING PASSWORD
					// $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

					//INSERT USER INTO DATABASE
					$sql = "INSERT INTO student (first_name,last_name,email,username,password,gender,faculty_id) VALUES('$firstname','$lastname','$email','$username','$password','$gender','$faculty');";
					mysqli_query($conn, $sql);
					header("location: index.php");
					exit();
					// print_r($_POST); 

				}
			}		
		}
	}
}
else{
	header("location: signup.php?error=Invalid Login");
	exit();
}


	//validate email
	

// 	//check password
// 	if(!empty($password)){
// 		if(strlen($password) < 8){
// 			echo 'password length less than 8<br>';
// 		}else{
// 			if(preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$!\-_\?=+])[a-zA-Z0-9!@#$\-_\?=+]+$/',$password)){
// 				echo 'password is ok<br>';
// 			}else{
// 				echo 'pass must contain atleast one uppercase characters,number and a special character<br>';
// 			}
// 		}
// 	}else{
// 		echo 'empty password';
// 	}
// }else{
// 	header('location:signup.php');
// }







