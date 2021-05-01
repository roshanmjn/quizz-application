<?php 

session_start();

// USER ID TO BE DELETED
// $delete_id = $_GET['id'];
$delete_id = $_SESSION['student_update_id'];

include_once('includes/db.inc.php');
$sql = "DELETE FROM student where student_id='$delete_id'";
if(mysqli_query($conn, $sql)){
	$_SESSION['msg'] = "User successfully deleted";
	header('location: student.php');
}
else{
	$_SESSION['msg'] = "Failed to delete user";
	header('location: student.php');
}

