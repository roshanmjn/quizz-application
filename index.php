 <?php 
 session_start();
 if(isset($_SESSION['email'])){
 	header('location: dashboard.php');
 } else{ ?>
 <html>
 <head>
 	<title>Online Examination</title>
 	<link rel="stylesheet" href="css/index.css">
 </head>
 <body>
 	<div class="heading">
 		<p class="title">ONLINE EXAMINATION SYSTEM</p>
 	</div>
 	<div class="container">
 		 <div class="inner">
 		 	<div class="rules">
	 			<h2>Ways to login:</h2>
	 			<ul>
	 				<li>The user id is given by the institute.</li>
	 				<li>New user account can be created for new access.</li>
	 				<li>New user account can be created for new access.</li>
	 				<li>New user account can be created for new access.</li>
	 				<li>New user account can be created for new access.</li>
	 			</ul>
 			</div>
 		
 			<div class="form">
		 		<form action="login_check.php" method="post">
		 			<input class="form-input" type="text" name="username" placeholder="Enter Username or Email" autofocus>
		 			<input class="form-input" type="password" name="password" placeholder="Password">

		 			<input class="form-button" type="submit" name="submit" value="Log In">

		 			<div class="seperator"></div>

		 			<div class="button-link">
		 				<a class="create-account" href="signup.php">Create New Account</a>
					</div>
		 		</form>
 			</div>
 		</div>
 	</div>

 </body>
 </html>
 <?php
}
 	include 'footer.php';
 ?>
