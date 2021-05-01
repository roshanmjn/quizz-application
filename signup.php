<?php 
session_start();

if(isset($_SESSION['email'])){
	header("location: dashboard.php");
	exit();
}
elseif(!isset($_SESSION['email'])){

 ?>
<html> 
<head>
	<link rel="stylesheet" href="css/signup.css">
	<title>Sign Up</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<div id="formm">
		<div id="form-main">
			<div class="form-heading">
				<h2>Sign Up</h2>	
			</div>

			<!--ERROR PANEL-->
			<?php if(isset($_GET['error'])) { ?>
			<div class="error-panel">
				<p class="error"><?php echo $_GET['error']; ?></p>
			</div>
			<?php } ?>

			<!--FORM PANEL-->
			<div class="form-signup">
				<form action="signup_check.php" method="post" >
					<div class="name form-panel">		
						<input id="form-fName" name="firstname" class="form-input form-input-halfwidth" type="text" placeholder="First Name" autocomplete="">
						<input id="form-lName" name="lastname" class="form-input form-input-halfwidth" type="text" placeholder="Last Name" autocomplete="">
					</div>
					<div class="username form-panel">			
						<input id="form-username" name="username" class="form-input" type="text" placeholder="Username" autocomplete="off">
					</div>
					<div class="email form-panel">			
						<input id="form-email" name="email" class="form-input" type="text" placeholder="Email" autocomplete="off">
					</div>

					<div class="password form-panel">
						<input id="form-password" name="password" class="form-input form-input-fullwidth" type="password" placeholder="New password" onKeyUpx="checkPasswordStrength();">
					</div>

					<div class="dates-panel">		
						<span class="span-title">Date of Birth</span>	
						<span class="date-month">
							<select id="form-date-month" name="month" id="month" class="selector">
								<option value="" selected="1">Month</option>
								<!--other options hidden below-->
								<option value="1">January</option>
								<option value="2">Februray</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
						</span>

						<span class="date-day">
							<select id="form-date-day" name="day" class="selector">
								<option value="" selected="1">Day</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
							</select>
						</span>

						<span class="date-year">
							<select name="year" id="form-date-year" class="selector">
								<option value="" selected="1">Year</option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>				
						</select>
						</span>
						<span class="form-message" id="message_date"></span>
					</div>
					
					<div class="gender-panel">
						<!-- <span class="title_gender">Gender</span> -->
						<span id="form-gender" class="span-title">Gender</span>

						<span class="gender">
							<input class="form-input-radio" type="radio" name="gender" id="male" value="M">
							<label class="label-radio" for="male">Male</label>
						</span>
						<span class="gender">
							<input class="form-input-radio"-radio type="radio" name="gender" id="female" value="F">
							<label class="label-radio" for="female">Female</label>
						</span>
						
						<span class="gender">
							<input class="form-input-radio" type="radio" name="gender" id="other" value="OTHER">
							<label class="label-radio" for="other">Other</label><br/>
						</span>	
					</div>

					<!--FACULTY PANEL START-->
					<div class="faculty-panel">		
						<span class="span-title">Faculty</span>	
						<span class="faculty">
							<select id="form-faculty" name="faculty" id="faculty" class="selector">
								<option value="" selected=1>Faculty</option>
								<?php  
									include_once 'includes/db.inc.php';
									$sql = "SELECT * FROM faculty;";
									$query = mysqli_query($conn, $sql);
									$queryCheck = mysqli_num_rows($query);

									if($queryCheck > 0){
										foreach($query as $row){
								?>
								<option value="<?php echo $row['faculty_id']; ?>"><?php echo $row['faculty_name']; ?></option>
								<?php 
									}
								}
								 ?>
							</select>
						</span>
					</div>
					
					<div class="form-button">
						<button type="submit" id="submit" name="submit" class="button">Sign Up</button>	
					</div>
				</form>
			</div>
			
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$("document").ready(function(){
			$("#form-username").keyup(function(){
				var email = $(this).val();
				$.ajax({
					url: 'check.php',
					data: {'email': email},
					dataType: 'text',
					method: 'post',
					success:function(data){
						$('#message_username').html(data);
					}
				});
			});
			
		});
	</script>

	<!-- <script>
		function checkPasswordStrength(){
			var number = /([0-9])/;
			var alphabets = /([a-zA-Z])/;
			var special_chars = /([~,!,@,#,$,%,^,&,*,-,_,=,+,?,>,<])/;

			if($("#form-password").val().length < 8){
				$("#message_password").html("pass should be atleast 8 characters.");
			}else {
                if ($('#form-password').val().match(number) && $('#form-password').val().match(alphabets) && $('#form-password').val().match(special_chars)) 
                {
                    $('#message_password').html("Strong");
                } else {
                    $('#message_password').html("should include uppercase and lowercase character	s, numbers and special characters.");
                }
            }
		}
	</script> -->
</body>
</html>
<?php 
}
include('footer.php') ;?>