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
<?php if(isset($_SESSION['user_id']))
    include_once ("./php/navbar_home.php");
else
    include_once ("./php/navbar_index.php");
?>

<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-9">
        <div class="panel panel-primary">
        <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
            Prof. Geetika Mudali
        </div>
        <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
            <div class="col-lg-4">
                <img src="./images/pdirector.jpg">
            </div>
            Prof. Geetika Mudali, our Placement Director, has a B.E from Osmania University and M.S from New Jersey Institute of Technology (NJIT), USA, in the area of Management Information Systems. She has worked with number of IT companies. She is a founder promoter of our Institute since 1996 and has worked untiringly for the growth of the Institute. She has played a key role in the formation of the Pre-Placement team for the purpose of improvement of soft skills among the students. The placement group under her stewardship has notched up number of success, most notably, of bringing in top IT firms of India to Orissa and making Orissa a hotbed of IT recruitment. She also teaches Database Systems and other Computer Science courses. Her research interests are Data Warehousing and Data Mining.

        </div>
    </div>

    </div><!--/Center Column-->


    <!-- Right Column -->


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
