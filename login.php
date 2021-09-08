<?php ob_start();
session_start();
unset($_SESSION["user_id"]);
error_reporting(E_ALL);
?>
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

<!-- Navigation -->
    <?php include_once ("./php/navbar_index.php");?>
<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-6">
        <?php include_once ("./php/login_alert.php");?>
        <?php include_once ("./php/login_script.php");?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="panel-title">
                Login
            </a>
        </div>
        <div class="panel-body">
        <form class="form-horizontal" action="./login.php" method="post">
            <div class="form-group has-success">
                <label class="col-xs-2 control-label">Username</label>
                <div class="col-xs-6">
                    <input type="text" name="uname" class="form-control" placeholder="username">
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-xs-2 control-label" >Password</label>
                <div class="col-xs-6">
                    <input type="password" name="upass" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <input  class="btn btn-lg btn-success" type="submit" name="login" class="form-control" value="Login" >
                    <a  href="./register.php" role="button" class="btn btn-primary btn-lg"> Register</a> </button>
                </div>
                <a class="text-danger" href="./forgot.php">Forgot Password ?</a>
            </div>

        </form>
        </div>
    </div>
    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">
        <!-- Text Panel -->
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

</body>
</html>
<?php
ob_end_flush();
?>
