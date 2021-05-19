<?php
require("includes/common.php");
$course_id=$_GET["id"];
$que = "SELECT * FROM subject WHERE course_id=$course_id";
$result = mysqli_query($con, $que)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if($num!=0){
    $error = "<span class='red'>Remove The subjects that belongs to the specified course first.</span>";
    header('location: courses.php?err=' . $error);
}
else{
    $query = "DELETE FROM course WHERE course_id=$course_id";
    mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:admin.php");
}
?>
