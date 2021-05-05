<?php 
	require('includes/db.inc.php');

	$username = $_POST['username'];

	$sql = "select username from student where username ='$username' ";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		echo 'Username has already been taken!';

	}
	else
	{
		echo 'Username available';
	}

	// $uppercase = preg_match('@[A-Z]@', $password);
	// $lowercase = preg_match('@[a-z]@', $password);
	// $number    = preg_match('@[0-9]@', $password);
	// $specialChars = preg_match('@[^\w]@', $password);


 ?>