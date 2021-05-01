<?php include('header.php'); 
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Faculty</title>	
	<link rel="stylesheet" type="text/css" href="css/faculty.css">
</head>
<body>
	<div class="container">
		<div class="main">
			<div class="faculty heading">
				<p>Faculty</p>
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
</body>
</html>
<?php include('footer.php') ?>