<?php include('header.php') ?>
<?php 
	$sql = "SELECT * FROM question";
	$result = mysqli_query($conn, $sql);
	
 ?>
<div class="question-container container">
	<div class="question-wrapper wrapper">
		<div class="heading">
			<p>Questions</p>
			<a href="#">Add Question</a>
		</div>

		<div class="question-main">
			<div class="question-table">
				<table>
					<tr>
						<th>S.N</th>
						<th>Q.ID</th>
						<th>Question</th>
						<th>Answer</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php 
   						$sql = "SELECT * FROM question";
   						$result = mysqli_query($conn, $sql);
   						$sn='0';
   						while($row = mysqli_fetch_array($result)){
   						$sn++;
					 ?>

					 <tr>
					 	<td><?php echo $sn; ?> </td>
					 	<td> <?php echo $row['question_id']; ?> </td>
					 	<td> <?php echo $row['question']; ?> </td>
					 	<td> <?php echo $row['correct_ans']; ?></td>
					 	<td> <a href="#" class="btn btn-success">UPDATE</a> </td>
					 	<td> <a href="#" class="btn btn-danger">DELETE</a> </td>
					 </tr>

					<?php } ?>
				</table>
			</div>				
		</div>
	</div>
</div>


<?php include('footer.php') ?>