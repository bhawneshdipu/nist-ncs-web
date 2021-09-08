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
                Prof. Sangram Mudali
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                <div class="col-lg-4">
                    <img src="./images/director.jpg">
                </div>
                Our Director, Prof Sangram Mudali, received his Bachelor of Technology from IIT, Kanpur in 1985 and has an M.S degree from the University of Houston, USA. He worked at B.F.Goodrich company in Ohio in the area of Computer Aided Design. He has received the J.F.K. Lincoln award based on his paper during his Master of Science program. After his return to India he worked with HCL Technologies in the CAD/CAM division. He set up his technical consultancy company in association with other IIT alumni in the area of Electronic Design Automation in FPGA and VLSI area in New Delhi. He was also involved with the product development and marketing of ParaDraft a Made in India CAD product. He is a founder promoter of NIST in the year 1996 and has been the founder Director of the Institute. He is a keen promoter of research groups in our Instiute such as Robotics Group, Embedded Systems Group and the BioInformatics Group. He is a member of the Board of Management of Orissa's Technical Unversity, the Biju Patnaik University of Technology.

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
