<?php
require("includes/common.php");
$question_id=$_GET["id"];
$_SESSION['question_id'] = $question_id;
$quiz_id = $_SESSION['quiz_id'];

$question_name = $_POST['question_name'];
$question_name_len = strlen($question_name);
$question_name = mysqli_real_escape_string($con, $question_name);

$option1 = $_POST['option1'];
$option1 = mysqli_real_escape_string($con, $option1);

$option2 = $_POST['option2'];
$option2 = mysqli_real_escape_string($con, $option2);

$option3 = $_POST['option3'];
$option3 = mysqli_real_escape_string($con, $option3);

$option4 = $_POST['option4'];
$option4 = mysqli_real_escape_string($con, $option4);

$answer_name = $_POST['answer_name'];
$answer_name = mysqli_real_escape_string($con, $answer_name);

$que = "SELECT * FROM questions WHERE question_name ='$question_name' AND quiz_id='$quiz_id'";
$result = mysqli_query($con, $que)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($question_name_len<10) {
    $m = "<span class='red'>The Question must be of 10 characters</span>";
    header('location: view_updated.php?m1=' . $m);
}
else if($answer_name != $option1 and $answer_name != $option2 and $answer_name != $option3 and $answer_name != $option4){
     $m = "<span class='red'>The Answer must match the options</span>";
     header('location: view_updated.php?m2=' . $m);
}
else {
$query = "UPDATE questions SET question_name = '" . $question_name . "', option1 = '" . $option1 . "', option2 = '" . $option2 . "', option3 = '" . $option3 . "', option4 = '" . $option4 . "', answer_name = '" . $answer_name . "' WHERE question_id = '" . $question_id . "' AND quiz_id= '" . $quiz_id . "'";
mysqli_query($con, $query) or die(mysqli_error($con));
header('location: view_updated.php');
}
?>