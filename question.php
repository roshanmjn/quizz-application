<?php include('header.php') ?>
<?php 
	$sql = "SELECT * FROM question order by rand() limit 10";
	$result = mysqli_query($conn, $sql);
	
 ?>
<div class="question-container">
	<div class="heading">
		<p>Questions</p>
	</div>
	<div class="question-wrapper">
		<form action="" method="post">
		<?php $c=0; while($row = mysqli_fetch_assoc($result)){ $c++; ?>
		<div class="questions">
			<div class="display">
				<p><?php echo $c ?>.<?php echo $row['question']; ?></p>
			</div>
			<div class="answers">
				<div class="answer-1 g">
					<input type="radio" id="one-<?php echo $c; ?>" value="ans1" name="<?php echo $c; ?>">
					<label for="one-<?php echo $c; ?>"><?php echo $row['ans1']; ?></label>
				</div>
				<div class="answer-2 g">
					<input type="radio" id="two-<?php echo $c; ?>" value="ans2" name="<?php echo $c; ?>">
					<label for="two-<?php echo $c; ?>"><?php echo $row['ans2']; ?></label>
				</div>
				<div class="answer-3 g">
					<input type="radio" id="three-<?php echo $c; ?>" value="ans3" name="<?php echo $c; ?>">
					<label for="three-<?php echo $c; ?>"><?php echo $row['ans3']; ?></label>
				</div>
				<div class="answer-4 g">
					<input type="radio" id="four-<?php echo $c; ?>" value="ans4" name="<?php echo $c; ?>">
					<label for="four-<?php echo $c; ?>"><?php echo $row['ans4']; ?></label>
				</div>
			</div>
		<?php } ?>
			<div class="button">
				<button type="submit" name="next" class="next">next</button>
			</div>
		</div>
		</form>
	</div>
</div>


<?php include('footer.php') ?>