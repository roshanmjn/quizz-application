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
<?php include('footer.php'); ?>