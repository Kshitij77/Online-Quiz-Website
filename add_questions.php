<?php
require("includes/common.php");
?>
<html>

<head>
    <title>Add Questions | Online Quiz System</title>
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
                <div class="col-xs-12 col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary" style="font-family:'Poppins'">
                        <div class="panel-heading">
                            <h4>Add Questions</h4>
                        </div>
                        <div class="panel-body">
                            <form action="add_questions_script.php" method="POST">
                                <div class="form-group ">
                                    <label for="quiz">Quizzes</label>
                                    <select class="form-control" id="quiz_id" name="quiz_id">
                                        <?php
                                        $query = "SELECT * FROM quiz";
                                        $result = mysqli_query($con, $query) or die($mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)) {
                                            if ($row["NOQ"] != 10) {
                                        ?>
                                                <option value="<?php echo $row["quiz_id"]; ?>"><?php echo $row["quiz_name"]; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>

</html>