<<<<<<< HEAD
<?php
include('header.php');

?>
<script src="js/jquery.min.js"></script>
<script>
	//CLICK FUNCTION ON DIV
	$(document).ready(function(){
		$(".student").click(function(){
			window.location = "student.php";
		});
		
		
	});
</script>
<div class="container">
   <div class="welcome">
   		<p>Hello <span class="user-text"><?php echo $_SESSION['firstname']; ?></span>. Welcome to Online Examination Portal.</p>
   </div>
   <div class="rules">
   		<p>
		    Here are some of the rules and regulations:<br />
		    1. Once you successfully login, you can't log back in unless the permission of system administrator.<br />
		    2. After you click on "Take a Test", the timer will start and it can't be paused or stopped.<br />
		    3. All 10 answers must be checked before submitting.<br />
		</p>

   </div>

   <div class="test-button">
		<a href="question.php" class="btn btn-success">Take a test</a>
		<p>-</p>
		<a href="logout.php" class="btn btn-danger">Quit</a>
	</div>
</div>	

=======
<?php
include('header.php');
define('siteurl',(isset($_SERVER['HOST'])&&$_SERVER['HOST']==='on')?"https":"http"."://".$_SERVER['HTTP_HOST'].'/'.$_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/dashboard.css">
	<title>Dashboard</title>
	<script src="js/jquery.min.js"></script>
	<script>
		//CLICK FUNCTION ON DIV
		$(document).ready(function(){
			$(".student").click(function(){
				window.location = "student.php";
			});
			
			
		});
	</script>
</head>
<body>
	<?php echo siteurl; ?>
	<div class="dashboard">		
		<div class="heading">Dashboard</div>
		
		<div class="counter-wrapper">
			<div class="counter">
			<h3>Students</h3>
				<?php 
					$sql1 = "SELECT student_id FROM student";
					$query = mysqli_query($conn,$sql1);
					$row = mysqli_num_rows($query);
					echo '<br><p class="display">'.$row.'</p>';
				 ?>	
			</div>

			<div class="counter">
				<h3>Faculty</h3>
				<?php 
						$sql1 = "SELECT faculty_id FROM faculty";
						$query = mysqli_query($conn,$sql1);
						$row = mysqli_num_rows($query);
						echo '<br><p class="display">'.$row.'</p>';
				?>
			</div>

			<div class="counter">
				<h3>Question</h3>
				<?php 
					$sql1 = "SELECT question_id FROM question";
					$query = mysqli_query($conn,$sql1);
					$row = mysqli_num_rows($query);
					echo '<br><p class="display">'.$row.'</p>';
				?>
			</div>

			<div class="counter">
				<h3>Result</h3>
				<?php 
					$sql1 = "SELECT result_id FROM result";
					$query = mysqli_query($conn,$sql1);
					$row = mysqli_num_rows($query);
					echo '<br><p class="display">'.$row.'</p>';
				?>
			</div>
		</div>
	</div>

	
</body>
</html>
>>>>>>> 13a41eea598d165f1fcdab37f697917fa73bbe10
<?php include('footer.php'); ?>