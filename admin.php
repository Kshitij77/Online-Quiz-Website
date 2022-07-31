<?php
require("includes/common.php");
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css">
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
</head>

<body style="padding-top: 50px;">
    <?php
    include 'includes/admin_header.php';
    ?>
    <div class="row">
        <div class="left col-xs-6" style="padding: 1.8rem 0rem;">
            <img src="img/courses.png">
            <br><br>
            <a href="courses.php" class="btn btn-danger btn-lg active">Courses</a>
        </div>
        <div class="lmiddle col-xs-6">
            <img src="img/subject.png">
            <br><br>
            <a href="subjects.php" class="btn btn-danger btn-lg active">Subjects</a>
        </div>
    </div>
    <div class="row">
        <div class="rmiddle col-xs-6" style="padding: 1.6rem 0rem;">
            <img src="img/qu.jpg">
            <br><br>
            <a href="view_quiz.php" class="btn btn-danger btn-lg active">Quizzes</a>
        </div>
        <div class="right col-xs-6">
            <img src="img/teacher.png">
            <br><br>
            <a href="teacher_details.php" class="btn btn-danger btn-lg active">Teachers</a>
        </div>
    </div>
</body>
</html>