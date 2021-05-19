<div class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="admin.php" ><span class="flogotxt">Online</span>&nbsp;<span class="slogotxt">Quiz System</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                      <li><a href="add_admin.php"><span class="glyphicon glyphicon-plus"></span> Add Admin </a></li>
                      <li><a href="add_teacher.php"><span class="glyphicon glyphicon-plus"></span> Add Teacher </a></li>
                      <li><a href="add_course.php"><span class="glyphicon glyphicon-plus"></span> Add Course </a></li>
                      <li><a href="view_admin_feedback.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; Feedback</a></li>
                      <li><a href = "admin_settings.php"><?php echo " ".$_SESSION['name']; ?></a></li>
                      <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
             </div>
     </div>
</div>  