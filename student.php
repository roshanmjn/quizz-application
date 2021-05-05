<?php 
include('header.php'); 
?>

<div class="student-container">
	<div class="student-wrapper">
		<div class="student heading">
			<p>Student</p>
			<a style="text-decoration:none;" class="add-student" href="#">Add student</a>
		</div>

		<!-- ERROR DISPLAY START-->
		<?php 
		if(isset($_SESSION['msg'])){ ?>
			<div class="error-panel">
				<p class="error"><?php echo $_SESSION['msg']; ?></p>
			</div>
		<?php } 
		unset($_SESSION['msg']); ?> 
		<!--ERROR DISPLAY END-->
		
		
		<div class="student-main">
			<table id="student-table">
				<tr>
					<th>S.N</th>
					<th>Name</th>
					<th>Email</th>
					<th>Username</th>
					<th>Gender</th>
					<th>Active Status</th>
					<th>Faculty</th>
					<th colspan="2">Action</th>
				</tr>
				<?php 
					$sql = "SELECT * FROM student;";
					$query = mysqli_query($conn, $sql);
					$queryCheck = mysqli_num_rows($query);

					foreach($query as $student)
					{
				?>
				<tr>
					<td><?php echo $student['student_id']; ?></td>
					<td><?php echo $student['first_name'].' '.$student['last_name']; ?></td>
					<td><?php echo $student['email']; ?></td>
					<td><?php echo $student['username']; ?></td>
					<td><?php echo $student['gender']; ?></td>
					<td><?php echo $student['active_status'] ?></td>
					<td>
					<?php $sql1 = "SELECT * FROM faculty";	
							$query1 = mysqli_query($conn, $sql1);
							foreach($query1 as $faculty1){
								if($student['faculty_id'] == $faculty1['faculty_id']){echo $faculty1['faculty_id'];
								} 
							}
					?>
					</td>
					<!-- <td><a href="student_update.php?id=<?php echo $student['student_id']; ?>">Update</td>
					<td><a href="delete_student.php?id=<?php echo $student['student_id']; ?>"> Delete</td>	 -->

					<td>
						<a href="student_update.php">
							<input type="hidden" value="<?php $_SESSION['student_update_id']=$student['student_id']; ?>">UPDATE
						</a>
					</td>
					<td>
						<a href="delete_student.php">
							<input type="hidden" value="<?php $_SESSION['student_update_id']=$student['student_id']; ?>">DELETE
						</a>
					</td>
				</tr>
			<?php
				}
			 ?>
			</table>
		</div>
	</div>
</div>
<?php include('footer.php') ?>