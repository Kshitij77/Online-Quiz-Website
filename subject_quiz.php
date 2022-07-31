<?php
require("includes/common.php");
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects_Quiz | Online Quiz System</title>
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
    $subject_id = $_GET["id"];
    if (isset($_SESSION['admin_id'])) {
        include 'includes/admin_header.php';
    } else {
        include 'includes/teacher_header.php';
    }
    ?>

    <div class="row decor_bg">
        <div class="col-md-12" style="margin-top: 4rem;">
            <table class="table table-striped">
                <?php
                $query = "SELECT * FROM quiz WHERE subject_id=$subject_id";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                ?>
                    <thead>
                        <tr>
                            <th>Quiz Id</th>
                            <th>Quiz Name</th>
                            <th>Subject Id</th>
                            <th>Subject Name</th>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Number Of Questions</th>
                            <th>Quiz Created By Teacher Name</th>
                            <th>Teacher ID</th>
                            <th>Remove Quiz</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row["quiz_id"]; ?></td>
                                <td><?php echo $row["quiz_name"]; ?></td>
                                <td><?php echo $row["subject_id"]; ?></td>
                                <td><?php echo $row["subject_name"]; ?></td>
                                <td><?php echo $row["course_id"]; ?></td>
                                <td><?php echo $row["course_name"]; ?></td>
                                <td><?php echo $row["NOQ"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["teacher_id"]; ?></td>
                                <td><a href="quiz_remove.php?id=<?php echo $row["quiz_id"]; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                <?php
                } else {
                    echo "<center><h2>There isn't any Quiz in this Subject yet.</h2></center>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>