<?php

require("includes/common.php");
$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$user_id = $_SESSION['user_id'];
$user_id = mysqli_real_escape_string($con, $user_id);

$user_name = $_SESSION['name'];
$user_name = mysqli_real_escape_string($con, $user_name);

$quiz_id = $_POST['quiz_id'];
$quiz_id = mysqli_real_escape_string($con, $quiz_id);

$q="SELECT * FROM quiz WHERE quiz_id=$quiz_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);
$quiz_name = $v["quiz_name"];
$quiz_name = mysqli_real_escape_string($con, $quiz_name);

$teacher_name = $v["name"];
$teacher_name = mysqli_real_escape_string($con, $teacher_name);

$teacher_id = $v["teacher_id"];
$teacher_id = mysqli_real_escape_string($con, $teacher_id);

$query = "SELECT * FROM teacher WHERE teacher_id ='$teacher_id'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
    $query = "INSERT INTO commonquizfeedback(user_id, user_name, quiz_id, quiz_name, feedback)VALUES('" . $user_id . "','" . $user_name . "','" . $quiz_id . "','" . $quiz_name . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $SNo = mysqli_insert_id($con);
    header('location: feedback_quiz.php?error=Feedback Sent');
    } else {
        $query = "INSERT INTO quizfeedback(user_id, user_name, quiz_id, quiz_name, feedback, teacher_id, teacher_name)VALUES('" . $user_id . "','" . $user_name . "','" . $quiz_id . "','" . $quiz_name . "','" . $message . "','" . $teacher_id . "','" . $teacher_name . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $SNo = mysqli_insert_id($con);
        header('location: feedback_quiz.php?error=Feedback Sent');
        }
?>