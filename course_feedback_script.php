<?php
require("includes/common.php");

$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$user_id = $_SESSION['user_id'];
$user_id = mysqli_real_escape_string($con, $user_id);

$user_name = $_SESSION['name'];
$user_name = mysqli_real_escape_string($con, $user_name);

$course_id = $_POST['course_id'];
$course_id = mysqli_real_escape_string($con, $course_id);

$q="SELECT * FROM course WHERE course_id=$course_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);
$course_name = $v["course_name"];
$course_name = mysqli_real_escape_string($con, $course_name);

$admin_name = $v["admin_name"];
$admin_name = mysqli_real_escape_string($con, $admin_name);

$admin_id = $v["admin_id"];
$admin_id = mysqli_real_escape_string($con, $admin_id);
$query = "INSERT INTO coursefeedback(user_id, user_name, course_id, course_name, feedback, admin_id, admin_name)VALUES('" . $user_id . "','" . $user_name . "','" . $course_id . "','" . $course_name . "','" . $message . "','" . $admin_id . "','" . $admin_name . "')";
mysqli_query($con, $query) or die(mysqli_error($con));
$SNo = mysqli_insert_id($con);
header('location: feedback_course.php?error=Feedback Sent');

?>