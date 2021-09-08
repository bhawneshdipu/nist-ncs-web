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
<?php
include_once ("./db_connect.php");
if(isset($_POST['delete_notice'])){
    $noticeid=$_POST['notice_id'];
    $sql="DELETE FROM notice_table WHERE notice_id = '$noticeid'";
    $result=pg_query($conn,$sql );
    if($result){
        echo "deleted";
        header("Location: ./notice_detail.php?m=deleted");
    }else{
        echo "failed";
        header("Location: ./notice_detail.php?m=failed");
    }
}
?>
<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px;margin-bottom: 30px">

    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./admin_home_left.php");?>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="panel-title">Delete Notice </div>
                <div class="panel-body">
                    <form id="delete_message" action="./notice_detail.php" method="post">
                        <input type="number" value="" placeholder="Enter Notice ID " name="notice_id" id="notice_id">
                        <input type="submit" value="Delete" class="btn btn-default btn-danger" formaction="./notice_detail.php" name="delete_msg">
                    </form>
                </div>
            </div>
        </div>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-9">
        <?php include_once ("./notice_alert.php");?>
        <?php include_once ("./list_notice.php");?>
        <?php include_once ("./delete_notice.php");?>
    </div><!--/Center Column-->


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