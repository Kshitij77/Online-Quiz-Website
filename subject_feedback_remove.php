<?php
require("includes/common.php");
$SNo=$_GET["id"];
$query = "DELETE FROM subjectfeedback WHERE SNo=$SNo";
mysqli_query($con, $query) or die($mysqli_error($con));
header("location:view_feedbacks.php");
?>
