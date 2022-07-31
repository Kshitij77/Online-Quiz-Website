<?php
require("includes/common.php");
$quiz_id = $_SESSION['quiz_id'];
$q = "SELECT * FROM quiz WHERE quiz_id=$quiz_id";
$fetch = mysqli_query($con, $q) or die(mysqli_error($con));
$v = mysqli_fetch_array($fetch);
$quiz_name = $v["quiz_name"];
$NOQ = $v["NOQ"];
?>
<html>

<head>
    <title>Create Questions | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include 'includes/teacher_header.php';
    ?>
    <div class="bac">
        <br><br><br><br><br><br><br><br>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <div class="panel panel-primary" style="font-family:'Poppins'">
                        <div class="panel-heading">
                            <h4>Create Question Number <?php echo $NOQ + 1; ?> for <?php echo $quiz_name; ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="create_questions_script.php" method="POST">
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Qusetion" name="question_name" required>
                                    <?php
                                    if (isset($_GET["m1"])) {
                                        echo $_GET['m1'];
                                    }
                                    if (isset($_GET["m3"])) {
                                        echo $_GET['m3'];
                                    }
                                    ?>
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Option 1" name="option1" required>
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Option 2" name="option2" required>
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Option 3" name="option3">
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Option 4" name="option4">
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Answer" name="answer_name" required>
                                    <?php
                                    if (isset($_GET["m2"])) {
                                        echo $_GET['m2'];
                                    }
                                    ?>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
    </div>
</body>

</html>