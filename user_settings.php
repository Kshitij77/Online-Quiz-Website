<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: user.php');
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>User Settings  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">   
    </head>
    <body>
      <?php
        include 'includes/user_header.php';
        ?>
        <div class="ban">
            <br><br><br><br><br>
            <div class="container-fluid" id="content">
                <div class="row ">
                    <div class="col-lg-4 col-lg-offset-1 col-md-6 col-md-offset-1">
                        <div class="panel panel-primary" style="font-family:'Poppins'">
                            <div class="panel-heading">
                                <h4>Update Details</h4>
                            </div>
                            <div class="panel-body">
                                <?php
                                $user_id = $_SESSION['user_id'];
                                $que="SELECT * FROM user WHERE user_id=$user_id";
                                $res=mysqli_query($con,$que) or die(mysqli_error($con));
                                while($row=mysqli_fetch_array($res)){
                                    ?>
                                <form  action="update_user.php?id=<?php echo $user_id; ?>" method="POST" >
                                    <div class="form-group col-sm-6 ">
                                        <label for="name">Name</label>
                                        <input class="form-control" name="name" value="<?php echo $row["name"];?>" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" class="form-control" name="contact" value="<?php echo $row["contact"];?>" required>
                                            <?php
                                            if(isset($_GET["m2"])){
                                                echo $_GET['m2'];
                                            }
                                            ?>
                                    </div>
                                    <div class="form-group col-sm-12 ">
                                        <label for="name">College Name</label>
                                        <input class="form-control" name="college" value="<?php echo $row["college"];?>" required>
                                    </div>
                                <?php
                                }
                                ?>
                                </b>
                            </div>
                            <center>
                                <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
                            </center>
                                </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 col-md-6 col-md-offset-1">
                        <div class="panel panel-primary" style="font-family:'Poppins'">
                            <div class="panel-heading">
                                <h4>Update Password</h4>
                            </div>
                            <div class="panel-body">
                                <form action="user_settings_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required>
                                   </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"  placeholder="New Password" required>
                                            <?php
                                            if(isset($_GET["m3"])){
                                                echo $_GET['m3'];
                                                }
                                            ?>
                                   </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                                    </div>
                                    <div>
                                        <b class="red">
                                            <?php
                                            if(isset($_GET["error"])){
                                                echo $_GET['error'];
                                                }
                                            ?>
                                        </b>
                                    </div>
                           </div>
                      <br>
                      <center>  <button type="submit" class="btn btn-primary">Change Password</button></center>
                              </form>  
                       </div>
                   </div>
                 </div>
             </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </body>
</html>
