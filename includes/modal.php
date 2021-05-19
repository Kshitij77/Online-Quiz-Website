<style>
    #login-panel .panel-footer{
    font-weight:normal;
}
.modal-header, .close{
    background-color:#33FF3E;
    color: white !important;
    text-align: center;
    font-size: 50px;
}

.modal-footer{
    background-color: #f9f9f9;
}

</style>
<link rel="stylesheet" href="style.css">
   <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content" style="font-family: 'Poppins'">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:'black'">&times;</button>
          <h4 style="color:black;" class="color"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="user_login_script.php" method="POST">
              <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> E-Mail</label>
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
            <?php if(isset($_GET["error"])){ echo $_GET['error'];} ?><br>
              <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button><br>
          <p>Not a member? <a href="signup.php">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>