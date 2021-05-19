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
  
  $college = $_POST['college'];
  $college = mysqli_real_escape_string($con, $college);

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else if ($pass_len<6) {
    $m = "<span class='red'>Password should be of atleast 6 characters</span>";
    header('location: signup.php?m3=' . $m);
  }  else {
    $query = "INSERT INTO user(name, email, password, contact, college)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $college . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name'] = $name;
    header('location: user.php');
  }
?>
