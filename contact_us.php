<?php
include "includes/common.php"
?>
<html>

<head>
    <title>Contact Us | Online Quiz System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Poppins:ital,wght@1,600&family=Sofia&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="padding-top: 50px;">
    <?php
    if (isset($_SESSION['email'])) {
        include 'includes/user_header.php';
    } else {
        include 'includes/header.php';
        include 'includes/modal.php';
    }
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="title">LIVE SUPPORT</h1>
                <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
                <div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>
            <div class="col-sm-2">
                <img align="right" src="img/cont.png" alt="contact us">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="contact-form">
                    <h2>Get In Touch</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group col-sm-9">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-sm-9">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-9">
                            <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-sm-7">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="contact-info">
                    <h2 class="title">Contact Info</h2>
                    <address>
                        <p>CHANDIGARH UNIVERSITY, MOHALI</p>
                        <p>ZAKIR B- 203,</p>
                        <p>INDIA</p>
                        <p>Mobile: 8400590126</p>
                        <p>Email:kshitijjaiswal87159@gmail.com</p>
                    </address>
                    <div>
                        <h2 class="title">Follow Us On&#58;</h2>
                        <a href="https://twitter.com/harshjais4" class="twitter-follow-button" data-show-count="false">Follow @TwitterDev</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>