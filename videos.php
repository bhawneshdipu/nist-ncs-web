<?php include_once ("./php/session_start.php");?>
<?php include_once ("./php/db_connect.php");?>


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
    <link href="./css/lightbox.css" rel="stylesheet">
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

<!-- Navigation -->


<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-9">


        <?php

        if(isset($_GET['video_id'])){
            $video_id=$_GET['video_id'];
            $sql = "select * from video_table where video_id='$video_id';";
            $result=pg_query($conn,$sql);
            if(pg_num_rows($result)>0) {
                $row = pg_fetch_row($result);
                $video_title = $row[1];
                $video_type = $row[2];
                echo '<div class="panel panel-default">
                <div class="panel-heading" style="font-family: "Ubuntu";font-size: xx-large"; >
                <b class="text-primary">'.$video_title.'</b>
                </div>
                <div class="panel-body" style="font-family: "Ubuntu";font-size:x-large">';

                echo '<video  width="750px" height="540px" controls class="center-block" >
                                   <source src="./video/' . $video_id .'.' .$video_type . '">
                                </video>';

                echo '</div></div>';

            }

        }


        ?>






        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: xx-large"; >
                <b class="text-primary">Video Gallery</b>
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:x-large">

                <?php

                    $sql = "select * from video_table ;";

                    $result=pg_query($conn,$sql);
                    if(pg_num_rows($result)>0){
                        while($row=pg_fetch_row($result)) {
                            $video_id = $row[0];
                            $video_name = $row[1];
                            $video_type = $row[2];
                            echo '<a class="thumbnail col-lg-3 col-sm-4 col-xs-6" href="./videos.php?video_id=' . $video_id . '" ><img src="./images/video.gif" class="thumbnail img-responsive"> </a>';
                        }
                    }
                ?>
            </div>
        </div>
    </div><!--/Center Column-->
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
<script src="./js/lightbox.js"></script>
<!-- Placeholder Images -->

</body>

</html>

