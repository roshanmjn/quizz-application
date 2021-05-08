<<<<<<< HEAD
<?php 
session_start(); 

require('includes/db.inc.php');

if(isset($_SESSION['email'])){
?>

<html lang="en">
<head>
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css">
	<!-- <link rel="stylesheet" href="css/question.css"> -->
	<!-- <link rel="stylesheet" href="css/student.css">		 -->
	<link rel="stylesheet" href="css/dashboard.css">	
	<link rel="stylesheet" href="css/question.css">	
	<link rel="stylesheet" href="css/result.css">	
	<!-- <link rel="stylesheet" type="text/css" href="css/faculty.css"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		  $(".dropdown-btn").click(function(){
		    $(".dropdown-content").toggleClass("hidden");
		  });
		});
	</script>
</head>
<body>
	<div class="header">
		<p>
			Online Examination Portal
		</p>
	</div>
<?php }
else{
	$_SESSION['msg'] = "Please Log In first !";
	header("location: index.php");
=======
<?php 
session_start(); 
require('includes/db.inc.php');
// if (!isset($_SESSION['email'])) {
// 	header("location: login.php");
// }
if(isset($_SESSION['email'])){

?>

<html lang="en">
<head>
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/question.css">
	<link rel="stylesheet" href="css/student.css">			
	<link rel="stylesheet" type="text/css" href="css/faculty.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	  $(".dropdown-btn").click(function(){
	    $(".dropdown-content").toggleClass("hidden");
	  });
	});
	</script>
</head>
<body>
	<div class="nav">
		<p class="header"><a href="#">Online Form</a></p>

		<div class="menu">
			<ul>
				<li><a href="dashboard.php">Home</a></li>
				<li><a href="student.php">Students</a></li>
				<li><a href="faculty.php">Faculty</a></li>
				<li><a href="question.php">Question</a></li>
				<li><a href="#">Result</a></li>
				<!-- <li class="logout_right"><a href="logout.php">Logout</a></li> -->
			</ul>
		</div>	

		<div class="dropdown-btn">
			<ul>			
					<li><span class="greetings"><?php  echo 'Hi, '.$_SESSION['firstname']; ?></span>
					<div class="arrow"></div>
					<ul class="dropdown-content visible hidden">
						<li><a href="logout.php" >Logout</a></li>
					</ul>
				</li>
			</ul>
			
		</div>
	</div>
<?php }
else{
	header("location: login.php");
>>>>>>> 13a41eea598d165f1fcdab37f697917fa73bbe10
} ?>