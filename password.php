<?php include_once ("./php/session_start.php");?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">


</head>

<body>

<!-- Navigation -->
<?php include_once ("./php/navbar_home.php");?>
<!-- Navigation-->

<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-2">
        <?php include_once ("./php/profile_card.php");?>
    </div>


    <!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-7">
        <?php include_once ("./php/password_alert.php");?>
        <?php include_once ("./php/password_form.php");?>
    </div>
    <!-- Right Column -->
    <div class="col-sm-3 ">
        <?php include_once ("./php/home_chatbox.php");?>
    </div><!--/Right Column -->

</div><!--/Right Column -->

</div><!--/container-fluid-->
<footer class=" nav navbar-inverse navbar-fixed-bottom ">
    <div class="container">
        <a class="text-white center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>


<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>


</body>

</html>