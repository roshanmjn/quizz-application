<<<<<<< HEAD
<?php include('header.php');

	$sql = "SELECT * FROM question order by rand() limit 5 ";
	// $sql = "SELECT * FROM question order by rand() limit 10";
	$result = mysqli_query($conn, $sql);
	
 ?>
<div class="question-container">
	<div class="heading">
		<p class="title">Questions</p>
		<p class="warning">Candidates are requested to submit only after checking all the answers.</p>
	</div>
	<div class="question-wrapper">
		<form action="result.php" method="post">
		<?php 
			$c=0; 
			while($row = mysqli_fetch_assoc($result)){  
		?>		
			<div class="display">
				<p><?php echo ($c+1).'||'.$row['question_id'] .'.'. $row['question']; ?></p>				
			</div>
			<div class="answers">
				
				<div class="answer-1 g">
					<span class="serial-no">a&rpar;</span>
					<input type="radio" id="one-<?php echo $c; ?>" value="1<?php echo $row['question_id']; ?>" name="<?php echo $c; ?>">
					<label for="one-<?php echo $c; ?>"><?php echo $row['ans1']; ?></label>
				</div>

				<div class="answer-2 g">
					<span class="serial-no">b&rpar;</span>
					<input type="radio" id="two-<?php echo $c; ?>" value="2<?php echo $row['question_id']; ?>" name="<?php echo $c; ?>">
					<label for="two-<?php echo $c; ?>"><?php echo $row['ans2']; ?></label>
				</div>

				<div class="answer-3 g">
					<span class="serial-no">c&rpar;</span>
					<input type="radio" id="three-<?php echo $c; ?>" value="3<?php echo $row['question_id']; ?>" name="<?php echo $c; ?>">
					<label for="three-<?php echo $c; ?>"><?php echo $row['ans3']; ?></label>
				</div>	
			
				<div class="answer-4 g">
					<span class="serial-no">d&rpar;</span>
					<input type="radio" id="four-<?php echo $c; ?>" value="4<?php echo $row['question_id']; ?>" name="<?php echo $c; ?>">
					<label for="four-<?php echo $c; ?>"><?php echo $row['ans4']; ?></label>
				</div>
				<!-- <input type="hidden" name="ques-<?php echo $c ?>" value="<?php echo $row['question_id']; ?>">  -->
			</div>
		<?php $c++; } ?>
			<div class="button">
				<button type="submit" name="submit" class="btn btn-success">submit</button>
			</div>
		</form>
	</div>
</div>


=======
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


>>>>>>> 13a41eea598d165f1fcdab37f697917fa73bbe10
<?php include('footer.php') ?>