<?php include('header.php') ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/question.css">
	<title>Question</title>
</head>
<body>
	<?php 
		$sql = "SELECT * FROM question order by rand() limit 10";
		$result = mysqli_query($conn, $sql);
		
	 ?>
	<div class="main">
		
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

	<!-- <form action="">
	
		<div class="disp">
			<p><?php echo $row['question']; ?></p>
		</div>
	<div class="eg">
		<div class="counter">
			<p><?php echo $c; ?> </p>
		</div>
		<div class="answer-1">
			<input type="radio" id="one" value="ans1" name="answer">
			<label for="one"><?php echo $row['ans1']; ?></label>
		</div>
		<div class="answer-1">
			<input type="radio" id="one" value="ans1" name="answer">
			<label for="one"><?php echo $row['ans2']; ?></label>
		</div>
		<div class="answer-1">
			<input type="radio" id="one" value="ans1" name="answer">
			<label for="one"><?php echo $row['ans3']; ?></label>
		</div>
		<div class="answer-1">
			<input type="radio" id="one" value="ans1" name="answer">
			<label for="one"><?php echo $row['ans4']; ?></label>
		</div>
	</div>

</form> -->

	
</body>
</html>
<?php include('footer.php') ?>