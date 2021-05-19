<?php
  require("includes/common.php");
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>| Online Quiz System |</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        include 'includes/modal.php';
        ?>
        <div class="banner_img">
            <div class="container">
               <center>
               <div class="banner_content">
                    <h1>Online Quiz System</h1>
                    <a href="#" class ="btn btn-danger btn-lg active" data-toggle="modal" data-target="#loginmodal">LogIn</a>
                    <a href="signup.php" class ="btn btn-danger btn-lg active">Register</a>
               </div>
               </center>    
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>