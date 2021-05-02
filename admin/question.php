<?php include('header.php') ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/question.css">
</head>
<body>
	<div class="container">
		<div class="main">
			<div class="question heading">
				<p>Question</p>
				<a href="#" class="add-question">Add Question</a>
			</div>

			<div class="question-main">
				<table id="question-table">
					<tr>
						<th>S.N</th>
						<th>ID</th>
						<th>Questions</th>
						<th>Faculty</th>
						<th colspan="2">Action</th>

					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>What is .....?</td>
						<td>BCA</td>
						<td><a href="#">UPDATE</a></td>
						<td><a href="#">DELETE</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<?php include('footer.php') ?>