<?php

require("includes/common.php");
$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$user_id = $_SESSION['user_id'];
$user_id = mysqli_real_escape_string($con, $user_id);

$user_name = $_SESSION['name'];
$user_name = mysqli_real_escape_string($con, $user_name);

$subject_id = $_POST['subject_id'];
$subject_id = mysqli_real_escape_string($con, $subject_id);

$q="SELECT * FROM subject WHERE subject_id=$subject_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);
$subject_name = $v["subject_name"];
$subject_name = mysqli_real_escape_string($con, $subject_name);

$teacher_name = $v["name"];
$teacher_name = mysqli_real_escape_string($con, $teacher_name);

$teacher_id = $v["teacher_id"];
$teacher_id = mysqli_real_escape_string($con, $teacher_id);

$query = "SELECT * FROM teacher WHERE teacher_id ='$teacher_id'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
    $query = "INSERT INTO commonsubjectfeedback(user_id, user_name, subject_id, subject_name, feedback)VALUES('" . $user_id . "','" . $user_name . "','" . $subject_id . "','" . $subject_name . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $SNo = mysqli_insert_id($con);
    header('location: feedback_subject.php?error=Feedback Sent');
    } else {
        $query = "INSERT INTO subjectfeedback(user_id, user_name, subject_id, subject_name, feedback, teacher_id, teacher_name)VALUES('" . $user_id . "','" . $user_name . "','" . $subject_id . "','" . $subject_name . "','" . $message . "','" . $teacher_id . "','" . $teacher_name . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $SNo = mysqli_insert_id($con);
        header('location: feedback_subject.php?error=Feedback Sent');
        }
?>