<?php 
	$sn=1;
	while($row = mysqli_fetch_assoc($result)){ ; 
?>		

<p><?php echo $sn.'.'. $row['question']; ?></p>
<input type="radio" value="1" name="<?php echo $row['question_id']; ?>">
<input type="radio" value="2" name="<?php echo $row['question_id']; ?>">
<input type="radio" value="3" name="<?php echo $row['question_id']; ?>">
<input type="radio" value="4" name="<?php echo $row['question_id']; ?>">
<?php } ?>
<button type="submit">Submit</button>