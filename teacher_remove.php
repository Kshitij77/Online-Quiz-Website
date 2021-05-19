<?php
require("includes/common.php");
$teacher_id=$_GET["id"];
$query = "DELETE FROM teacher WHERE teacher_id=$teacher_id";
mysqli_query($con, $query) or die($mysqli_error($con));
header("location:admin.php");
?>
