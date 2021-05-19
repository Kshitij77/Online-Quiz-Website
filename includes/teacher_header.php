<div class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="teacher.php" ><span class="flogotxt">Online</span>&nbsp;<span class="slogotxt">Quiz System</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                      <li><a href="add_subject.php"><span class="glyphicon glyphicon-plus"></span> Add Subject </a></li>
                      <li><a href="add_quiz.php"><span class="glyphicon glyphicon-plus"></span> Add Quiz </a></li>
                      <li><a href="add_questions.php"><span class="glyphicon glyphicon-plus"></span> Add Questions </a></li>
                      <li><a href="quizzes.php"><span class="glyphicon glyphicon-pencil"></span> Edit Quiz </a></li>
                      <li><a href = "teacher_settings.php"><?php echo " ".$_SESSION['name']; ?></a></li>
                      <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
             </div>
     </div>
</div>  