<?php
include('header.php');
?>
<!--CLICK FUNCTION FOR DASHBOARD COUNTER-->
<script src="js/jquery.min.js"></script>
<script>
	//CLICK FUNCTION ON DIV
	$(document).ready(function(){
		$(".student-counter").click(function(){
			window.location = "student.php";
		});
		$(".faculty-counter").click(function(){
			window.location = "faculty.php";
		});
		$(".question-counter").click(function(){
			window.location = "question.php";
		});
		$(".result-counter").click(function(){
			window.location = "dashboard.php";
		});
	});

</script>

<div class="dashboard">		
	<div class="dash-heading">Dashboard</div>
	
	<div class="counter-wrapper">
		<div class="student-counter counter">
		<h3>Students</h3>
			<?php 
				$sql1 = "SELECT student_id FROM student";
				$query = mysqli_query($conn,$sql1);
				$row = mysqli_num_rows($query);
				echo '<br><p class="display">'.$row.'</p>';
			 ?>	
		</div>

		<div class="faculty-counter counter">
			<h3>Faculty</h3>
			<?php 
					$sql1 = "SELECT faculty_id FROM faculty";
					$query = mysqli_query($conn,$sql1);
					$row = mysqli_num_rows($query);
					echo '<br><p class="display">'.$row.'</p>';
			?>
		</div>

		<div class="question-counter counter">
			<h3>Question</h3>
			<?php 
				$sql1 = "SELECT question_id FROM question";
				$query = mysqli_query($conn,$sql1);
				$row = mysqli_num_rows($query);
				echo '<br><p class="display">'.$row.'</p>';
			?>
		</div>

		<div class="result-counter counter">
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

<?php include('footer.php'); ?>