<?php 
include ('header.php') ;
$link = (isset($_SERVER['HOST']) && $_SERVER['HOST'] === 'on')?"https":"http".'://'.$_SERVER['HTTP_HOST'];
echo $link.'<br>';
if(isset($_POST['submit'])){
	$sql = "SELECT question_id,correct_ans FROM question";
 	$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
 	$correct_ans = 0;
 	$wrong_ans = 0;
 	$unchecked_ans = 0;
	
	$x=0;
	// $fullAnswer = [];
	// for($i=0;$i<=9;$i++){
	// 	if(!isset($_POST[$i])){
	// 		$ans
	// 	}	
	// }
	for($i=0;$i<=4;$i++){
		if(isset($_POST[$x])){
		$fullAnswer = $_POST[$x];

		//Find the question id
		$questionId = substr($fullAnswer,1,4);
		echo 'the question id for question no. '.($i+1).' is '.$questionId.'<br>';

		//Find the answer
		$answer = substr($fullAnswer,0,1);
		echo 'the chosen answer for question no. '.($i+1).' is '.$answer.'<br>';

		//get the question for the answer 
		$result = mysqli_query($conn,"SELECT * FROM question WHERE question_id='$questionId';");
		$question = mysqli_fetch_assoc($result);

		$correct_answer = $question['correct_ans'];
		if($answer == $correct_answer){
			$correct_ans++;
		}else{
			$wrong_ans++;
		}
		echo 'The correct ans for Question Id '.$question['question_id'].' is '.$correct_answer.'<br><br>';
		}else{
			$_POST[$x]=0;
			$unchecked_ans++;
			echo 'answer for question no. '.($x+1).' not selected <br><br>';
		}
		$x++;
	}
	echo 'Total correct ans = '.$correct_ans;
	echo '<br>';
	echo 'Total wrong ans = '.$wrong_ans;
	echo '<br>';
	echo 'Total unchecked ans = '.$unchecked_ans;
	echo '<br>';
	echo '<br>';

	
 	print_r($_POST);

	// $a=4524234234;
	// $b=substr($a,1,5);
	// echo $b;
	
}

echo '<a href="'.$link.'projectw/dashboard.php">Go Home</a>';


