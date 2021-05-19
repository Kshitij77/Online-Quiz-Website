<?php

require("includes/common.php");
$subject_name = $_POST['subject_name'];
$subject_name = mysqli_real_escape_string($con, $subject_name);

$teacher_id = $_SESSION['teacher_id'];
$teacher_id = mysqli_real_escape_string($con, $teacher_id);

$teacher_name = $_SESSION['name'];
$teacher_name = mysqli_real_escape_string($con, $teacher_name);

$course_id = $_POST['course_id'];
$course_id = mysqli_real_escape_string($con, $course_id);

$q="SELECT course_name FROM course WHERE course_id=$course_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);
$course_name = $v["course_name"];
$course_name = mysqli_real_escape_string($con, $course_name);

$query = "SELECT * FROM subject WHERE subject_name ='$subject_name' AND course_id='$course_id'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num != 0) {
    $m = "<span class='red'>This Subject Already Exists in the specified course</span>";
    header('location: add_subject.php?m1=' . $m);
    } else {
        $query = "INSERT INTO subject(subject_name, course_id, course_name, teacher_id, name)VALUES('" . $subject_name . "','" . $course_id . "','" . $course_name . "','" . $teacher_id . "','" . $teacher_name . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $subject_id = mysqli_insert_id($con);
        header('location: add_subject.php?error=Subject added');
        }
?>