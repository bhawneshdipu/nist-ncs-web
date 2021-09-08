<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">

</head>

<body>

<?php include_once ("./php/navbar_index.php");?>

<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-3">

        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-6">
        <?php include_once ("./php/forgot_script.php");?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="panel-title">
                Forgot Password
                </a>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="./forgot.php" method="post">
                    <div class="form-group has-success">
                        <label class="col-xs-2 control-label">Username</label>
                        <div class="col-xs-6">
                            <input type="text"  name="uname" id="uname" class="form-control" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-xs-2 control-label" >Email</label>
                        <div class="col-xs-6">
                            <input type="email" name="uemail" id="uemail" class="form-control" placeholder="eg.-email@email.com">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-xs-2 control-label" >NIST Rollno.</label>
                        <div class="col-xs-6">
                            <input type="number" name="unistid" id="unistid" class="form-control" placeholder="eg.-2016123456">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-xs-2 control-label" >Security PIN</label>
                        <div class="col-xs-6">
                            <input type="number" name="upin" id="upin" class="form-control" placeholder="eg.-1234">
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-sm-12">
                            <input  class="btn btn-lg btn-success col-xs-5 " name="getpassword" type="submit" id="getpassword" class="form-control" value="Get Password" >
                        </div>
                    </div>
                    <hr>
                    <a class="text-success">Already had a account ?</a>
                    <br>
                    <a role="button" class="btn btn-primary btn-lg col-xs-5" href="./login.php">Login </a>

                </form>
            </div>
        </div>
    </div><!--/Center Column-->



    <!-- Right Column -->
    <div class="col-sm-3">
        <!-- Text Panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><span class="glyphicon glyphicon-apple"></span> About the Mentor</h1>
            </div>

            <div class="panel-body">
                <img src="./images/nist.jpg">
                <p>An Apple a day keeps the doctor away...</p>
            </div>
        </div>

        <!-- Text Panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><span class="glyphicon glyphicon-apple"></span>Our Director </h1>
            </div>

            <div class="panel-body">
                <img src="./images/nist.jpg">
                <p>An Apple a day keeps the doctor away...</p>
            </div>
        </div>

        <!-- Text Panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><span class="glyphicon glyphicon-apple"></span> Our Placement Director</h1>
            </div>

            <div class="panel-body">
                <img src="./images/nist.jpg">
                <p>An Apple a day keeps the doctor away...</p>
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
<script src="js/holder.min.js"></script>

</body>

</html>


</body>
</html>
