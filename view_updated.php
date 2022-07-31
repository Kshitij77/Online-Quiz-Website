<?php
require("includes/common.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Question | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include 'includes/teacher_header.php';
    $question_id = $_SESSION['question_id'];
    $quiz_id = $_SESSION['quiz_id'];
    ?>
    <div class="ban">
        <br><br><br><br><br>
        <div class="container-fluid" id="content">
            <div class="row ">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <?php
                    $que = "SELECT * FROM questions WHERE question_id=$question_id AND quiz_id='$quiz_id'";
                    $res = mysqli_query($con, $que) or die(mysqli_error($con));
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <div class="panel panel-primary" style="font-family:'Poppins'">
                            <div class="panel-heading">
                                <h4>Updated Question</h4>
                            </div>
                            <div class="panel-body">
                                <form action="">
                                    <div class="form-group col-sm-12 ">
                                        <label for="question_name">Question</label>
                                        <input class="form-control" name="question_name" value="<?php echo $row["question_name"]; ?>" readonly>
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
                                        <input class="form-control" name="option1" value="<?php echo $row["option1"]; ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option2">Option2</label>
                                        <input class="form-control" name="option2" value="<?php echo $row["option2"]; ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option3">Option3</label>
                                        <input class="form-control" name="option3" value="<?php echo $row["option3"]; ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="option4">Option4</label>
                                        <input class="form-control" name="option4" value="<?php echo $row["option4"]; ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="answer_name">Answer</label>
                                        <input class="form-control" name="answer_name" value="<?php echo $row["answer_name"]; ?>" readonly>
                                        <?php
                                        if (isset($_GET["m2"])) {
                                            echo $_GET['m2'];
                                        }
                                        ?>
                                    </div>
                                    </b>
                            </div>
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </div>
</body>

</html>