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
<?php include_once ("./php/navbar_index.php");?>
<?php include_once ("./php/add_caption.php");?>

<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-6">


        <!-- Carousel container -->
        <div id="my-pics" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#my-pics" data-slide-to="0" class="active "></li>
                <li data-target="#my-pics" data-slide-to="1"></li>
                <li data-target="#my-pics" data-slide-to="2"></li>
                <li data-target="#my-pics" data-slide-to="3"></li>
                <li data-target="#my-pics" data-slide-to="4"></li>

            </ol>

            <!-- Content -->
            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="item active">
                    <img src="./images/slide1.jpg" alt="Sunset over beach">
                    <div class="carousel-caption">
                        <h3><?php echo $title1;?></h3>
                        <p><?php echo $heading1;?></p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="item">
                    <img src="./images/slide2.jpg" alt="Rob Roy Glacier">
                    <div class="carousel-caption">
                        <h3><?php echo $title2;?></h3>
                        <p><?php echo $heading2;?></p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="item">
                    <img src="./images/slide3.jpg" alt="Longtail boats at Phi Phi">
                    <div class="carousel-caption">
                        <h3><?php echo $title3;?></h3>
                        <p><?php echo $heading3;?></p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="item">
                    <img src="./images/slide4.jpg" alt="Longtail boats at Phi Phi">
                    <div class="carousel-caption">
                        <h3><?php echo $title4;?></h3>
                        <p><?php echo $heading4;?></p>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="item">
                    <img src="./images/slide5.jpg" alt="Longtail boats at Phi Phi">
                    <div class="carousel-caption">
                        <h3><?php echo $title5;?></h3>
                        <p><?php echo $heading5;?></p>
                    </div>
                </div>

            </div>

            <!-- Previous/Next controls -->
            <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <!-- Center the image -->
        <style scoped>
            .item img{
                margin: 0 auto;
            }
        </style>
        <!--
        <!-- Alert --
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
        </div>-->

        <!-- Articles -->
        <br>
        <br>

        <div class="col-sm-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Reviews </h3>
                </div>
                <div class="panel-body">
                    <img class="thumbnail img-responsive img-thumbnail" src="./images/review.jpg">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-sm btn-primary " href="./reviews.php" >View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Image Gallery</h3></div>
                <div class="panel-body">
                    <img class="thumbnail img-responsive img-thumbnail" src="./images/gallery.gif" >
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-default btn-primary" href="./gallery.php">View</a>
                    </div>
                </div>
            </div>
        </div><div class="col-sm-4">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Video Gallery</h3>
                </div>
                <div class="panel-body">
                    <img class="thumbnail img-responsive img-thumbnail" src="./images/video.gif">
                    <div class="btn-group btn-primary" role="group">
                        <a type="button" href="./videos.php" class="btn btn-sm btn-primary">Watch</a>
                    </div>
                </div>
            </div>
        </div>


    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_rightside.php");?>

    </div><!--/Right Column -->

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
