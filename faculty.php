<?php include('header.php'); 
?>

<div class="faculty-container">
	<div class="faculty-wrapper">
		<div class="faculty heading">
			<p>Faculty</p>
			<a class="add faculty" href="#">Add faculty</a>
		</div>
		
		<div class="faculty-main">
			<table id="faculty-table">
				<tr>
					<th>S.N</th>
					<th>Name</th>
					<th>Information</th>
					<th>Is Active?</th>
					<th colspan = "2">Action</th>
				</tr>
				<?php 
					$sql = "SELECT * FROM faculty"; 
					$query = mysqli_query($conn, $sql);
					
					foreach($query as $faculty)
					{
				?>
				<tr>
					<td><?php echo $faculty['faculty_id']; ?></td>
					<td><?php echo $faculty['faculty_name']; ?></td>
					<td><?php echo $faculty['faculty_info']; ?></td>
					<td><?php echo $faculty['faculty_active']; ?></td>

					<!-- <td><a href="update_faculty.php?id=<?php echo $faculty['faculty_id']; ?>">UPDATE</a></td> -->
					<!-- <td><a href="delete_faculty.php?id=<?php echo $faculty['faculty_id']; ?>">DELETE</a></td> -->

					<td>
						<a href="update_faculty.php">
							<input type="hidden" value="<?php echo $_SESSION['faculty_update_id'] = $faculty['faculty_id']; ?>">UPDATE
						</a>
					</td>
					<td>
						<a href="delete_faculty.php">
							<input type="hidden" value="<?php echo $_SESSION['faculty_update_id'] = $faculty['faculty_id']; ?>">DELETE
						</a>
					</td>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
<?php include('footer.php') ?>