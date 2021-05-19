<?php

require("includes/common.php");
$quiz_name = $_POST['quiz_name'];
$quiz_name = mysqli_real_escape_string($con, $quiz_name);

$teacher_id = $_SESSION['teacher_id'];
$teacher_id = mysqli_real_escape_string($con, $teacher_id);

$teacher_name = $_SESSION['name'];
$teacher_name = mysqli_real_escape_string($con, $teacher_name);

$subject_id = $_POST['subject_id'];
$subject_id = mysqli_real_escape_string($con, $subject_id);

$q="SELECT * FROM subject WHERE subject_id=$subject_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);
$subject_name = $v["subject_name"];
$subject_name = mysqli_real_escape_string($con, $subject_name);

$course_name = $v["course_name"];
$course_name = mysqli_real_escape_string($con, $course_name);

$course_id = $v["course_id"];
$course_id = mysqli_real_escape_string($con, $course_id);

$NOQ = 0;
$NOQ = mysqli_real_escape_string($con, $NOQ);

$query = "SELECT * FROM quiz WHERE quiz_name ='$quiz_name' AND subject_id='$subject_id'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num != 0) {
    $m = "<span class='red'>This Quiz Already Exists in the specified subject</span>";
    header('location: add_quiz.php?m1=' . $m);
    } else {
        $query = "INSERT INTO quiz(quiz_name, subject_id, subject_name, course_id, course_name, NOQ, teacher_id, name)VALUES('" . $quiz_name . "','" . $subject_id . "','" . $subject_name . "','" . $course_id . "','" . $course_name . "','" . $NOQ . "','" . $teacher_id . "','" . $teacher_name . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $quiz_id = mysqli_insert_id($con);
        header('location: add_quiz.php?error=Quiz added');
        }
?>