<?php 
include('header.php');

// $update_id = $_GET['id'];
$update_id = $_SESSION['faculty_update_id'];

echo 'faculty id ='.$update_id.'<br>';
echo $link = (isset($_SERVER['HOST']) && $_SERVER['HOST'] === 'on')?"https":"http".'://'.$_SERVER['HTTP_HOST'];

//CHECK ERROR MESSAGE
if(isset($_SESSION['message'])) {
	$message =  $_SESSION['message'];
	unset($_SESSION['message']);
}

//ON SUBMIT UPDATE FACULTY
if(isset($_POST['submit'])){
	$result ='';
	$faculty_name = $_POST['name'];
	$info = $_POST['info'];
	$is_active = $_POST['is_active'];

	$sql1 = "UPDATE faculty SET 					
					faculty_name = '$faculty_name',
					faculty_info = '$info',
					faculty_active = '$is_active'
					WHERE faculty_id='$update_id' ";

	$query1 = mysqli_query($conn, $sql1);

	if($query1){
		$_SESSION['message'] = "Update Successful";
		header("location: update_faculty.php?id=".$update_id);
		
	}
	else{
		$_SESSION['message'] = "Update Failed";
		header("location: update_faculty.php?id".$update_id);
		
	}
}

//CODE TO DISPLAY FACULTY INFO FOR EDITING
$sql = "SELECT * FROM faculty where faculty_id='$update_id'";

?>
<!--STYLE SHEET ALREADY LINKED WITH THE HEADER FILE, SO NO NEED TO LINK WITH UPDATE_FACULTY.PHP -->

<div id="formm">
	<div id="form-main">
		<div class="form-heading">
			<h2>Update Faculty</h2>	
		</div>

			<!--ERROR PANEL START-->
			<?php if(!empty($message)) { ?>
				<div class="error-panel">
					<p class="error"><?php echo $message; ?></p>
				</div>
			<?php } ?>
			<!--ERROR PANEL END-->

		<!--FORM PANEL START-->
		<div class="form-signup">

			<form action="" method="post" >
				<?php 
					$query = mysqli_query($conn, $sql);
				while($faculty = mysqli_fetch_assoc($query)){ 
				?>
				<div class="name form-panel">	
					<span id="form-faculty" class="span-title">Faculty Name</span>
					<input name="name" class="form-input " type="text" placeholder="Faculty Title" value="<?php echo $faculty['faculty_name']; ?>">
				</div>

				<span class="span-title">Faculty Information</span>
				<div class="information form-panel">
					<input name = "info" class= "form-input" type="text" value="<?php echo $faculty['faculty_info']; ?>" placeholder = "Information" id="form-informantion">
					
				</div>

				<!--ACTIVE STATUS PANEL START-->
				<div class="active-panel">
				<span id="form-active" class="span-title">Is Active?</span>
					<span class="active">
						<input <?php if($faculty['faculty_active'] == 1){echo "checked='checked'";}?> class="form-input-radio" type="radio" name="is_active" id="yes" value="1">
						<label class="label-radio" for="yes">Yes</label>
					</span>
					<span class="active">
						<input <?php if($faculty['faculty_active'] == 0){echo "checked='checked'";}?> class="form-input-radio" type="radio" name="is_active" id="no" value="0">
						<label class="label-radio" for="no">No</label>
					</span>
				</div>
				<?php } ?>

				<!--SIGNUP BUTTON START-->
				<div class="form-button">
					<button type="submit" id="submit" name="submit" class="button">Update</button>	
					<a href="<?php echo $link; ?>/projectw/faculty.php" class="button" style="text-decoration: none;">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	include 'footer.php';
 ?>