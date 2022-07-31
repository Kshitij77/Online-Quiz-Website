<?php
require("includes/common.php");
?>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Feedback | Online Quiz System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css">
  <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
  <style>
    .block {
      display: block;
      width: 100%;
      height: 25%;
      border: none;
      background-color: #4CAF50;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
    }

    .block:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>

<body style="padding-top: 100px;">
  <?php
  include 'includes/admin_header.php'; ?>
  <a href="view_feedback_course.php"><button class="block">Course Feedbacks</button></a>
  <br><br><br>
  <a href="view_feedback_common.php"><button class="block">Common Quiz Feedbacks</button></a>
  <br><br><br>
  <a href="view_subject_common.php"><button class="block">Common Subject Feedbacks</button></a>

</body>

</html>