<?php
require("includes/common.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quiz | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include 'includes/teacher_header.php';
    $quiz_id = $_GET["id"];
    $_SESSION['quiz_id'] = $quiz_id;
    $qu = "SELECT * FROM quiz WHERE quiz_id=$quiz_id";
    $res = mysqli_query($con, $qu) or die(mysqli_error($con));
    $a = mysqli_fetch_array($res);
    $quiz_name = $a["quiz_name"];
    $NOQ = $a["NOQ"];
    if ($NOQ == 0) {
        echo "<center><h2><br><br><br><br><br>There isn't any Questions in this Quiz yet.</h2></center>";
    } else {
    ?>
        <br><br><br><br><br>
        <div class="container-fluid" id="content">
            <div class="row ">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <?php
                    $que = "SELECT * FROM questions WHERE quiz_id=$quiz_id";
                    $res = mysqli_query($con, $que) or die(mysqli_error($con));
                    $n = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <div class="panel panel-primary" style="font-family:'Poppins'">
                            <div class="panel-heading">
                                <h4>Update Question <?php echo $n; ?> Of <?php echo $quiz_name; ?></h4>
                            </div>
                            <div class="panel-body">
                                <form action="update_quiz.php?id=<?php echo $row["question_id"]; ?>" method="POST">
                                    <div class="form-group col-sm-12 ">
                                        <label for="question_name">Question</label>
                                        <input class="form-control" name="question_name" value="<?php echo $row["question_name"]; ?>" required>
                                        <?php
                                        if (isset($_GET["m1"])) {
                                            echo $_GET['m1'];
                                        }
                                        if (isset($_GET["m3"])) {
                                            echo $_GET['m3'];
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option1">Option1</label>
                                        <input class="form-control" name="option1" value="<?php echo $row["option1"]; ?>" required>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option2">Option2</label>
                                        <input class="form-control" name="option2" value="<?php echo $row["option2"]; ?>" required>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option3">Option3</label>
                                        <input class="form-control" name="option3" value="<?php echo $row["option3"]; ?>">
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option4">Option4</label>
                                        <input class="form-control" name="option4" value="<?php echo $row["option4"]; ?>">
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="answer_name">Answer</label>
                                        <input class="form-control" name="answer_name" value="<?php echo $row["answer_name"]; ?>" required>
                                        <?php
                                        if (isset($_GET["m2"])) {
                                            echo $_GET['m2'];
                                        }
                                        ?>
                                    </div>
                                    </b>
                            </div>
                            <center>
                                <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
                            </center>
                            </form>
                        </div>
                    <?php
                        $n++;
                    }
                    ?>
                </div>
            </div>
        <?php
    }
        ?>
        </div>
</body>

</html>