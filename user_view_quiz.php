<?php
require("includes/common.php");
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes | Online Quiz System</title>
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
    include 'includes/user_header.php';
    ?>
    <div class="row decor_bg">
        <div class="col-md-12">
            <table class="table table-striped">
                <?php
                $n = 10;
                $query = "SELECT * FROM quiz WHERE NOQ=$n";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                ?>
                    <thead>
                        <tr>
                            <th>Quiz Name</th>
                            <th>Subject Name</th>
                            <th>Course Name</th>
                            <th>Number Of Questions</th>
                            <th>Quiz Created By Teacher Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($result)) { //if($row["NOQ"]==10){
                        ?>
                            <tr>
                                <td><a href="attempt_quiz.php?id=<?php echo $row["quiz_id"]; ?>"><?php echo $row["quiz_name"]; ?></a></td>
                                <td><a href="user_subject_quiz.php?id=<?php echo $row["subject_id"]; ?>"><?php echo $row["subject_name"]; ?></a></td>
                                <td><a href="user_course_subject.php?id=<?php echo $row["course_id"]; ?>"><?php echo $row["course_name"]; ?></a></td>
                                <td><?php echo $row["NOQ"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                            </tr>
                        <?php
                            //}
                        }
                        ?>
                    </tbody>
                <?php
                } else {
                    echo "<center><h2>Sorry, There isn't any Quiz Ready yet.</h2></center>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>