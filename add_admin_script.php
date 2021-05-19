<?php

require("includes/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $pass_len = strlen($password);
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);
  
 
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);


  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";
  

  $query = "SELECT * FROM admin WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: add_admin.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: add_admin.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: add_admin.php?m2=' . $m);
  } else if ($pass_len<6) {
    $m = "<span class='red'>Password should be of atleast 6 characters</span>";
    header('location: add_admin.php?m3=' . $m);
  }  else {
    $query = "INSERT INTO admin(name, email, password, contact)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $admin_id = mysqli_insert_id($con);
    header('location: admin.php');
  }
?>
