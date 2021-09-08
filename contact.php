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

<!-- Navigation -->
<?php if(isset($_SESSION['user_id']))
    include_once ("./php/navbar_home.php");
else
    include_once ("./php/navbar_index.php");
?>


<div class="container-fluid" style="margin-top: 45px">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">About</h3>
                <p>
                    Nist Councelling Services
                </p>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img width="250" height="250" class="img-circle img-responsive" src="./dev/dipu.jpg" alt="" >
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bhawnesh Dipu</h4>
                                <h4 class="subheading">Developer and Designer</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    bhawnesh.dipu@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="./dev/pancham.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>P P Pancham</h4>
                                <h4 class="subheading">Database Designer and Debugger</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    pancham.chandra@live.com
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="./dev/debo.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Debadeepa Rath</h4>
                                <h4 class="subheading">UI Designer and Debugger</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    debadeepa.rath@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="./dev/praveen.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Praveen Kumar</h4>
                                <h4 class="subheading">UI Designer and Debugger</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">

                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="./dev/nagen.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Nagen Kr Sathua</h4>
                                <h4 class="subheading">UI Designer and Debugger</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">

                                </p>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>



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

