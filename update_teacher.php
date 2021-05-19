<?php

require("includes/common.php");
$teacher_id=$_GET["id"];

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $regex_num = "/^[6789][0-9]{9}$/";
  
if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: teacher_settings.php?m2=' . $m);
  }
  else {
    $query="UPDATE teacher SET name = '" . $name . "', contact = '" . $contact . "' WHERE teacher_id=$teacher_id";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['name'] = $name;
    header('location: teacher.php');
  }
?>