<?php
  require("includes/common.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
    </head>
<body>
   <?php
      include 'includes/header.php';
   ?>
    <div class="bac">
       <br><br><br><br><br><br><br><br>
       <div class="container-fluid decor_bg" id="login-panel">
           <div class="row ">
               <div class="col-md-4 col-md-offset-4">
                   <div class="panel panel-primary" style="font-family:'Poppins'">
                      <div class="panel-heading">
                          <h4>Admin Login</h4>
                      </div>
                      <div class="panel-body">
                          <form role="form" action="admin_login_script.php" method="POST">
                               <div class="form-group">
                                   <label><span class="glyphicon glyphicon-envelope"></span> Admin E-Mail</label>
                                   <input type="email" class="form-control"  name="email" placeholder="Enter your Registered E-Mail" required>
                               </div>
                               <div class="form-group">
                                   <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                   <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                   <?php
                                       if(isset($_GET["err"])){
                                         echo $_GET['err'];
                                         }
                                  ?>
                               </div>
                               <?php
                                   if(isset($_GET["error"])){
                                       echo $_GET['error'];} 
                                ?><br>
                               <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
                          </form> 
                      </div>
                   </div>
              </div>
           </div>
        
    </div><br><br><br><br><br><br>
    </div>
    <?php
        include 'includes/footer.php';
        ?>
</body>
</html>
