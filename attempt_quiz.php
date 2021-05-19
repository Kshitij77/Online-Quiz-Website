<?php
require("includes/common.php");
$_SESSION['score'] = 0;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Attempt Quiz  |  Online Quiz System</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">   
        <style>
body {
    background-size:100%;
    background-repeat: no-repeat;
    position: relative;
    background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
 
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
 
.button:hover span {
  padding-right: 25px;
}
 
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #ccc11e;
	font-size: 28px;
  padding: 20px;
	
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}
 
.button3:hover {
    background-color: #f4e542;
    color: Black;
}
</style>
    </head>
    <body>
      <?php
        include 'includes/user_header.php';
        $quiz_id=$_GET["id"];
        $qu="SELECT NOQ FROM quiz WHERE 'quiz_id'=$quiz_id";
        $res=mysqli_query($con,$qu) or die(mysqli_error($con));
        $a=mysqli_fetch_array($res);
        $NOQ = $a["NOQ"];
        ?>
        <center>
<?php 															
if (isset($_POST['click']) || isset($_POST['start'])) {
    @$_SESSION['clicks'] += 1 ;
    $c=$_SESSION['clicks'];
    //$question_id = $_POST['question_id'];
    if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
    $fetchqry2 = "UPDATE `questions` SET `userans`='$userselected' WHERE `question_id`=$c-1";
    $result2 = mysqli_query($con,$fetchqry2);
    }
    } else {
        $_SESSION['clicks'] = 0;
    }
//echo($_SESSION['clicks']);
    ?>
            <br><br><br><br><br>
            <div class="bump"><br><form method="post"><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
            <form action="" method="post">  				
                <table><?php  if(isset($c)) {  
                    $fetchqry = "SELECT * FROM `questions` WHERE question_id=$c AND quiz_id=$quiz_id" ;
                    $result=mysqli_query($con,$fetchqry);
                    $num=mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    }
                    ?>
                    <tr><td><h3><br><?php echo @$row['question_name'];?></h3></td></tr><?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ ?>
                    <tr><td><input required type="radio" name="userans" value="<?php echo $row['option1'];?>">&nbsp;<?php echo $row['option1']; ?><br>
                    <tr><td><input required type="radio" name="userans" value="<?php echo $row['option2'];?>">&nbsp;<?php echo $row['option2'];?></td></tr>
                    <tr><td><input required type="radio" name="userans" value="<?php echo $row['option3'];?>">&nbsp;<?php echo $row['option3']; ?></td></tr>
                    <tr><td><input required type="radio" name="userans" value="<?php echo $row['option4'];?>">&nbsp;<?php echo $row['option4']; ?><br><br><br></td></tr>
<!-- <input type="hidden" name="question_id" value="<?php echo $row['question_id'];?>"> -->
                    <tr><td><button class="button3" name="click" >Next</button></td></tr><?php }  ?> 
                    <form>
 <?php 
 if($_SESSION['clicks']>10){
     $qry3 = "SELECT `answer_name`, `userans` FROM `questions`;";
     $result3 = mysqli_query($con,$qry3);
     $storeArray = Array();
     while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
         if($row3['answer_name']==$row3['userans']){
             @$_SESSION['score'] += 1 ;
         }
         }
 ?> 
<h2>Result</h2>
<span>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
unset($_SESSION['score']);  ?></span><br>
<?php $marks=$no*10; ?>
<span>Your Score:&nbsp<?php echo $marks; ?></span>
<?php 
$q="SELECT * FROM quiz WHERE quiz_id=$quiz_id";
$fetch=mysqli_query($con,$q) or die(mysqli_error($con));
$v=mysqli_fetch_array($fetch);

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

$quiz_name = $v["quiz_name"];
$quiz_name = mysqli_real_escape_string($con, $quiz_name);

$course_name = $v["course_name"];
$course_name = mysqli_real_escape_string($con, $course_name);

$subject_name = $v["subject_name"];
$subject_name = mysqli_real_escape_string($con, $subject_name);

$query = "INSERT INTO history(user_id, name, quiz_name, subject_name, course_name, score, date)VALUES('" . $user_id . "','" . $name . "','" . $quiz_name . "','" . $subject_name . "','" . $course_name . "','" . $marks . "', NOW())";
mysqli_query($con, $query) or die(mysqli_error($con));
$SNo = mysqli_insert_id($con);
} ?>
</center>
</body>
</html>
