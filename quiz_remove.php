<?php
require("includes/common.php");
$quiz_id=$_GET["id"];
$qu = "DELETE  FROM questions WHERE quiz_id=$quiz_id";
mysqli_query($con, $qu) or die($mysqli_error($con));
$query = "DELETE FROM quiz WHERE quiz_id=$quiz_id";
mysqli_query($con, $query) or die($mysqli_error($con));
if(isset($_SESSION['admin_id'])){
    header("location:admin.php");
}
else {
    header("location:teacher.php");
}
?>
