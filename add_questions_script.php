<?php
  require("includes/common.php");
  $quiz_id = $_POST['quiz_id'];
  $_SESSION['quiz_id'] = $quiz_id;
  $quiz_id = $_SESSION['quiz_id'];
  header('location: create_questions.php');
  ?>
