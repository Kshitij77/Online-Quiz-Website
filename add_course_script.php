<?php

require("includes/common.php");
$course_name = $_POST['course_name'];
$course_name = mysqli_real_escape_string($con, $course_name);

$admin_id = $_SESSION['admin_id'];
$admin_id = mysqli_real_escape_string($con, $admin_id);

$admin_name = $_SESSION['name'];
$admin_name = mysqli_real_escape_string($con, $admin_name);

$query = "SELECT * FROM course WHERE course_name ='$course_name'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num != 0) {
    $m = "<span class='red'>Course Already Exists</span>";
    header('location: add_course.php?m1=' . $m);
    } else {
        $query = "INSERT INTO course(course_name, admin_id, admin_name)VALUES('" . $course_name . "','" . $admin_id . "','" . $admin_name . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $course_id = mysqli_insert_id($con);
        header('location: add_course.php?error=Course added');
        }
?>