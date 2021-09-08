<?php include_once ("./php/session_start.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->

<?php
       $xx= $_SESSION["user_id"];
        echo $xx.'-------------------------------------------------------------------------------->>>';
if(($_SESSION["user_id"]))
    include_once ("./php/navbar_home.php");
else
    include_once ("./php/navbar_index.php");
?>

<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->
    <!-- center column-->
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: xx-large"; >
                <b>Our Services</b>
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:x-large">
                <ul>
               <b><li>Carrer Counselling</li></b>
                <p style="font-size: large">Career Counseling is a quite eloquent feature of our counselling services where we show the student the right avenue so that there is an emergence of a fruitful career. The focus of career counseling is generally on issues such as career exploration, career change, personal career development and other career related issues.</p>
                <b><li>Personal Counselling</li></b>
                    <p style="font-size: large">Personal counseling can help increase self-confidence, ameliorate relationships, solve problems, achieve educational goals, and make good decisions for physical, emotional, intellectual, and spiritual well-being. Personal counseling is a process of self-discovery and growth.</p>
                <b><li>Guidence Services</li></b>
                    <p style="font-size: large">Guidance counseling is the process of helping the individuals discover and develop their educational, vocational, and psychological potentialities and thereby to achieve an optimal level of personal happiness and social usefulness. </p>


            </div>
            </div>
        </div>


</div><!--/container-fluid-->
<footer class=" nav navbar-inverse ">
    <div class="container">
        <a class="text-white center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>



<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- IE10 viewport bug workaround -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<!-- Placeholder Images -->

</body>

</html>




       