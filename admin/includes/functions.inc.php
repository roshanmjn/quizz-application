<?php 

function emptyInputSignup($firstName, $lastName, $email, $password){
	$result;

	if(empty($firstName) || empty($lastName) || empty($email) || empty($password) ){
			$result = true;
	}
	else{
		$result= false;
	}
	return $result;
}

/*
function invalidUid($username){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}*/

function invalidEmail($email){
	$result;
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function emailExists($conn, $email){
	$sql = "SELECT * FROM users WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: signup.php?error=stmtFailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s",$email);  /*" string -> ss -> 2 string or interger"*/
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}


function createUser($conn, $firstName, $lastName, $email, $password){
	$sql = "INSERT INTO users (firstname,lastname,email,password) VALUES (?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: signup.php?error=stmtFailed");
		exit();
	}

	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss",$firstname,$lastname,$email,$hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);	
	header("location: signup.php?error=none");
}