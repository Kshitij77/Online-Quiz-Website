<?php

require("includes/common.php");
$user_id=$_GET["id"];

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $college = $_POST['college'];
  $college = mysqli_real_escape_string($con, $college);
  
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $regex_num = "/^[6789][0-9]{9}$/";
  
if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: user_settings.php?m2=' . $m);
  }
  else {
    $query="UPDATE user SET name = '" . $name . "', contact = '" . $contact . "', college = '" . $college . "' WHERE user_id=$user_id";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['name'] = $name;
    header('location: user.php');
  }
?>