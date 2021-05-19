<?php
require("includes/common.php");
$question_id=$_GET["id"];
$qu = "SELECT * FROM questions WHERE question_id='$question_id'";
$res = mysqli_query($con, $qu)or die($mysqli_error($con));
$a=mysqli_fetch_array($res);
$quiz_id = $a["quiz_id"];

$que = "SELECT * FROM quiz WHERE quiz_id='$quiz_id'";
$result = mysqli_query($con, $que)or die($mysqli_error($con));
$b=mysqli_fetch_array($result);
$NOQ = $b["NOQ"];
$NOQ = mysqli_real_escape_string($con, $NOQ);
$NOQ--;
$quer = "UPDATE  quiz SET NOQ = '" . $NOQ . "' WHERE quiz_id = '" . $quiz_id . "'";
mysqli_query($con, $quer) or die($mysqli_error($con));

$query = "DELETE FROM questions WHERE question_id=$question_id";
mysqli_query($con, $query) or die($mysqli_error($con));

if(isset($_SESSION['admin_id'])){
    header("location:admin.php");
}
else {
    header("location:teacher.php");
}
?>
