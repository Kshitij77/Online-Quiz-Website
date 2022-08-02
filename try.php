<?php
require("includes/common.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attempt Quiz | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include 'includes/user_header.php';
    $quiz_id = $_GET["id"];
    $qu = "SELECT NOQ FROM quiz WHERE quiz_id=$quiz_id";
    $res = mysqli_query($con, $qu) or die(mysqli_error($con));
    $a = mysqli_fetch_array($res);
    $NOQ = $a["NOQ"];
    if ($NOQ == 0) {
        echo "<center><h2><br><br><br><br><br>There isn't any Questions in this Quiz yet.</h2></center>";
    } else {
    ?>
        <div class="ban">
            <br><br><br><br><br>
            <div class="container-fluid" id="content">
                <div class="row ">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                        <?php
                        $que = "SELECT * FROM questions WHERE quiz_id=$quiz_id";
                        $res = mysqli_query($con, $que) or die(mysqli_error($con));
                        $n = 1;
                        $marks = 0;
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="panel panel-primary" style="font-family:'Poppins'">
                                <div class="panel-heading">
                                    <h4>Question <?php echo $n; ?></h4>
                                </div>
                                <form method="post" class="form">
                                    <div class="form-group col-sm-12">
                                        <h4>&nbsp;&nbsp;Question</h4>
                                        <?php $question_name = $row["question_name"];
                                        $question_id = $row["question_id"];
                                        echo $question_name;
                                        echo $question_id;
                                        ?>
                                        <input class="form-control" name="question_name" value="<?php echo $row["question_name"]; ?>" readonly>
                                    </div>
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Options</h4>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="option1" name="submitted_option" value="option1">
                                    <label for="option1"><?php echo $row["option1"]; ?></label><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="option2" name="submitted_option" value="option2">
                                    <label for="option2"><?php echo $row["option2"]; ?></label><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="option3" name="submitted_option" value="option3">
                                    <label for="option3"><?php echo $row["option3"]; ?></label><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="option4" name="submitted_option" value="option4">
                                    <label for="option4"><?php echo $row["option4"]; ?></label>
                                    <center>
                                        <button type="submit" name="submit">Submit</button>
                                    </center>
                                </form>
                            </div>
                        <?php
                            $n++;
                        }
                        if (isset($_POST["submit"])) {
                            if (isset($_POST['submitted_option'])) {
                                $sel = $_POST['submitted_option'];
                                echo $sel;
                            }
                        }
                        ?>
                    </div>
                </div>
            <?php
        }
            ?>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
</body>

</html>