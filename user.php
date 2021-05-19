<?php
  require("includes/common.php");
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css">
        <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
        <style>
            .split {
                height: 81%;
                width: 25%;
                position: fixed;
                z-index: 1;
                top: 0;
                overflow-x: hidden;
                padding-top: 20px;
            }
            /* Control the left side */
            .left {
                left: 1;
                background-color: #aa80ff;
            }
            .lmiddle {
                left: 385;
                background-color: #f54287;
            }
            .rmiddle {
                left: 769;
                background-color: #011638;
            }
            /* Control the right side */
            .right {
                right: 0;
                background-color: #ffff1a;
            }
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }
            /* Style the image inside the centered container, if needed */
            .centered img {
                width: 150px;
                border-radius: 50%;
            }
        </style>
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/user_header.php';
        ?>
        <div class="row">
             <div class="split left">
                 <div class="centered">
                     <img src="img/courses.png">
                     <br><br>
                     <a href="user_courses.php" class ="btn btn-danger btn-lg active">Courses</a>
                 </div>
            </div>
            <div class="split lmiddle">
                 <div class="centered">
                     <img src="img/subject.png">
                     <br><br>
                     <a href="user_subjects.php" class ="btn btn-danger btn-lg active">Subjects</a>
                 </div>
            </div>
            <div class="split rmiddle">
                 <div class="centered">
                     <img src="img/qu.jpg">
                     <br><br>
                     <a href="user_view_quiz.php" class ="btn btn-danger btn-lg active">Quizzes</a>
                 </div>
            </div>
             <div class="split right">
                 <div class="centered">
                     <img src="img/history.jpg">
                     <br><br>
                     <a href="history.php?id=<?php echo $_SESSION['user_id'];?>" class ="btn btn-danger btn-lg active">History</a>
                 </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
        include 'includes/footer.php';
        ?>
       </body>
</html>
