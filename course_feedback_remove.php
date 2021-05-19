<?php
require("includes/common.php");
$SNo=$_GET["id"];
$query = "DELETE FROM coursefeedback WHERE SNo=$SNo";
mysqli_query($con, $query) or die($mysqli_error($con));
header("location:view_admin_feedback.php");
?>
