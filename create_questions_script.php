<?php

require("includes/common.php");

$quiz_id = $_SESSION['quiz_id'];

$q="SELECT * FROM quiz WHERE quiz_id=$quiz_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);

$NOQ= $v["NOQ"];
$NOQ = mysqli_real_escape_string($con, $NOQ);

$question_id = $NOQ+1;

$quiz_name = $v["quiz_name"];
$quiz_name = mysqli_real_escape_string($con, $quiz_name);

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
if($num!=0){
    $m = "<span class='red'>The Question already exists in this Quiz</span>";
    header('location: create_questions.php?m3=' . $m);
}
else if ($question_name_len<10) {
    $m = "<span class='red'>The Question must be of 10 characters</span>";
    header('location: create_questions.php?m1=' . $m);
}
else if($answer_name != $option1 and $answer_name != $option2 and $answer_name != $option3 and $answer_name != $option4){
     $m = "<span class='red'>The Answer must match the options</span>";
     header('location: create_questions.php?m2=' . $m);
}
else {
$query = "INSERT INTO questions(question_id, question_name, quiz_id, quiz_name, option1, option2, option3, option4, answer_name, userans)VALUES('" . $question_id . "','" . $question_name . "','" . $quiz_id . "','" . $quiz_name . "','" . $option1 . "','" . $option2 . "','" . $option3 . "','" . $option4 . "','" . $answer_name . "','" . $answer_name . "')";
mysqli_query($con, $query) or die(mysqli_error($con));
$id = mysqli_insert_id($con);
$_SESSION['question_id'] = $question_id;
$qu = "SELECT * FROM quiz WHERE quiz_name ='$quiz_name' AND quiz_id='$quiz_id'";
$res = mysqli_query($con, $qu)or die($mysqli_error($con));
$a=mysqli_fetch_array($res);
$NOQ = $a["NOQ"];
$NOQ = mysqli_real_escape_string($con, $NOQ);
$NOQ++;
$quer = "UPDATE  quiz SET NOQ = '" . $NOQ . "' WHERE quiz_id = '" . $_SESSION['quiz_id'] . "'";
mysqli_query($con, $quer) or die($mysqli_error($con));
header('location: add_questions.php');
}
?>