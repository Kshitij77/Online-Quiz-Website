<?php
require("includes/common.php");
$subject_id=$_GET["id"];
$que = "SELECT * FROM quiz WHERE subject_id=$subject_id";
$result = mysqli_query($con, $que)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if($num!=0){
    $error = "<span class='red'>Remove The Quiz that belongs to the specified subject first.</span>";
    header('location: subjects.php?err=' . $error);
}
else{
    $query = "DELETE FROM subject WHERE subject_id=$subject_id";
    mysqli_query($con, $query) or die($mysqli_error($con));
    if(isset($_SESSION['admin_id'])){
        header("location:admin.php");
    }
    else {
        header("location:teacher.php");
    }
}
?>
