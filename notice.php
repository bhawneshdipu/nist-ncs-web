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
    <script src="./js/chat-script.js"></script>
    <script src="./js/jquery-1.10.1.min.js"></script>


</head>

<body>

<!-- Navigation -->

<?php include_once("./php/navbar_home.php");?>
<!-- Navigation -->

<!-- body-->
<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-2">
        <?php include_once("./php/profile_card.php")?>

    </div>
    <!--/Left Column-->
    <!-- Center Column -->
    <div class="col-sm-7">
        <?php include_once ("./php/notice_alert.php");?>
        <?php include_once ("./php/post_notice.php");?>

        <?php if($user_priority==9 or $user_priority==6 or $user_priority==3) {
            echo '<form action="./notice.php" class="form-group" method="post">
        <div class="panel panel-default">
            <div class="panel-heading text-danger" >
                <input type="text" class="btn btn-default  pull-left" id="notice_title" name="notice_title" placeholder="Title">
                <a role="button" class="btn btn-info pull-right">'; ?><?php date_default_timezone_set('Asia/Kolkata');
            $date = date_create();
            $time = date_format($date, 'g:ia \o\n l jS F Y');
            echo $time;
            echo ' </a><br>
            </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" ><input type="text" class="btn btn-default " id="notice_subtitle" name="notice_subtitle" placeholder="Subtitle"><hr>
                <textarea rows="5" id="notice_body" name="notice_body" placeholder="Body" class="form-control"></textarea>

            </div>
            <div class="panel-footer " style="font-size=medium"><a role="button" class="btn btn-primary pull-left">'.$name.'
         </a>           <input type="submit" value="Post"  class="btn btn-danger pull-right" id="post_notice" name="post_notice" ><br>
            </div></div></form>';
        }?>


        <?php include_once ("./php/notice_fetch.php");?>

        
        
        <?php include_once ("./php/notice_pagination.php");?>
    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/home_chatbox.php");?>
    </div>
    <!-- /right Column-->

</div><!--/Body -->
<!--/container-fluid-->
<footer class=" nav navbar-inverse navbar-fixed-bottom ">
    <div class="container">
        <a class="text-white center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>


<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/custom.js"></script>
<!-- IE10 viewport bug workaround -->
<script src="js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>
