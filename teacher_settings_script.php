<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: teacher.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$pass_len = strlen($new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email, password FROM teacher WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($pass_len<6) {
    $m = "<span class='red'>Password should be of atleast 6 characters</span>";
    header('location: admin_settings.php?m3=' . $m);
} else if ($new_pass != $new_pass1) {
    header('location: teacher_settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  teacher SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: teacher_settings.php?error=Password Updated');
    } else
        header('location: teacher_settings.php?error=Wrong Old Password');
}
?>