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
    <link href="./css/chat-style.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">
    <script src="./js/custom.js"></script>

    <script src="./js/jquery-1.11.3.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".changer").click(function () {
                var a=$(this).val();
                $("#msgreceiver").val(a).selected;
            })
        });
    </script>

</head>

<body>

<!-- Navigation -->

    <?php include_once ("./php/navbar_home.php");?>
<!-- Navigation -->
<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-2">
        <?php include_once ("./php/profile_card.php");?>
    </div>
    <!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-7 container-fluid">
        <?php include_once ("./php/message_alert.php");?>

        <?php include_once ("./php/message_msgbox.php");?>
        
        <?php include_once ("./php/message_sendmsg.php");?>
        
        <?php include_once ("./php/message_msgpanel.php");?>
        <?php include_once ("./php/message_pagination.php");?>

    </div>
    <!-- Right Column -->
    <div class="col-sm-3 container-fluid">

    <?php include_once ("./php/message_chatbox.php");?>
    </div><!--/Right Column -->

</div><!--/container-fluid-->
<footer class=" nav navbar-inverse navbar-fixed-bottom ">
    <div class="container">
        <a class="text-white center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>

</footer>


<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport bug workaround -->
<script src="js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>