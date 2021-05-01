d<?php 
	require('includes/db.inc.php');

	$email = $_POST['email'];

	$sql = "select email from student where email ='$email' ";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		echo 'A user account for this email already exists';

	}
	else
	{
		echo 'email available';
	}

	// $uppercase = preg_match('@[A-Z]@', $password);
	// $lowercase = preg_match('@[a-z]@', $password);
	// $number    = preg_match('@[0-9]@', $password);
	// $specialChars = preg_match('@[^\w]@', $password);


 ?>