<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./../css/custom.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php include_once ("./navbar_home.php");?>
<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px;margin-bottom: 30px">

    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./admin_home_left.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-6">
        <?php include_once ("./add_admin_alert.php");?>
        <?php include_once ("./add_admin.php");?>
    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">

    </div><!--/Right Column -->

</div><!--/container-fluid-->
<footer class=" nav navbar-inverse  navbar-fixed-bottom">
    <div class="container">
        <a class=" center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>


<!-- jQuery -->
<script src="./../js/jquery-1.11.3.min.js"></script>
<script src="./../js/bootstrap.min.js"></script>

</body>
</html>