<?php
  require("includes/common.php");
  ?>
<html>
    <head>
        <title>Add Quiz  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
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
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary" style="font-family:'Poppins'">
                        <div class="panel-heading">
                            <h4>Add Quiz</h4>
                        </div>
                        <div class="panel-body">
                            <form  action="add_quiz_script.php" method="POST">
                            <div class="form-group ">
                                <input class="form-control" placeholder="Quiz Name" name="quiz_name"  required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group ">
                                <label for="subject">Subject</label>
                                <select class="form-control" id="subject_id" name="subject_id">
                                    <?php
                                       $query = "SELECT * FROM subject";
                                       $result = mysqli_query($con, $query)or die($mysqli_error($con));
                                       while($row=mysqli_fetch_array($result)) 
                                       {
                                    ?>
                                    <option value="<?php echo $row["subject_id"]; ?>"><?php echo $row["subject_name"]; ?></option>
                                    <?php
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
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div> 
    </body>
</html>
