<?php
require("includes/common.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Remove Question  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">   
    </head>
    <body>
      <?php
        if(isset($_SESSION['admin_id'])){
        include 'includes/admin_header.php';
        } 
        else {
        include 'includes/teacher_header.php';
        }
        $quiz_id=$_GET["id"];
        $qu="SELECT NOQ FROM quiz WHERE quiz_id=$quiz_id";
        $res=mysqli_query($con,$qu) or die(mysqli_error($con));
        $a=mysqli_fetch_array($res);
        $NOQ = $a["NOQ"];
        if($NOQ==0){
            echo "<center><h2><br><br><br><br><br>There isn't any Questions in this Quiz yet.</h2></center>";
            }else {
            ?>
        <div class="ban">
            <br><br><br><br><br>
            <div class="container-fluid" id="content">
                <div class="row ">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                        <?php
                                $que="SELECT * FROM questions WHERE quiz_id=$quiz_id";
                                $res=mysqli_query($con,$que) or die(mysqli_error($con));
                                while($row=mysqli_fetch_array($res)){
                                    ?>
                        <div class="panel panel-primary" style="font-family:'Poppins'">
                            <div class="panel-heading">
                                <h4>Remove Question</h4>
                            </div>
                            <div class="panel-body">
                                <form  action="remove_question_script.php?id=<?php echo $row["question_id"]; ?>" method="POST" >
                                    <div class="form-group col-sm-10 ">
                                        <label for="question_name">Question</label>
                                        <input class="form-control" name="question_name" value="<?php echo $row["question_name"];?>" required>
                                    </div>
                                    <div class="form-group col-sm-10 ">
                                        <label for="option1">Option1</label>
                                        <input class="form-control" name="option1" value="<?php echo $row["option1"];?>" required>
                                    </div>
                                    <div class="form-group col-sm-10 ">
                                        <label for="option2">Option2</label>
                                        <input class="form-control" name="option2" value="<?php echo $row["option2"];?>" required>
                                    </div>
                                    <div class="form-group col-sm-10 ">
                                        <label for="option3">Option3</label>
                                        <input class="form-control" name="option3" value="<?php echo $row["option3"];?>">
                                    </div>
                                    <div class="form-group col-sm-10 ">
                                        <label for="option4">Option4</label>
                                        <input class="form-control" name="option4" value="<?php echo $row["option4"];?>">
                                    </div>
                                    <div class="form-group col-sm-10 ">
                                        <label for="answer_name">Answer</label>
                                        <input class="form-control" name="answer_name" value="<?php echo $row["answer_name"];?>" required>
                                    </div>
                                </b>
                            </div>
                            <center>
                                <button type="submit" name="submit" value="update" class="btn btn-primary">Remove</button>
                            </center>
                                </form>
                        </div>
                        <?php
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
