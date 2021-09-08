<!DOCTYPE html>
<html lang="en">
<head>
    <title>Videos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="./../js/jquery.min.js"></script>
    <script src="./../js/jquery.Jcrop.min.js"></script>
    <script type="text/javascript" src="./script.js"></script>

    <link rel="stylesheet" href="./../css/style.css" />
    <link rel="stylesheet" href="./../css/jcrop.js.css" type="text/css" />
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../css/bootstrap-theme.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">

</head>

<body>
<!-- Navigation -->
<?php include_once ("./navbar_home.php");?>
<?php include_once ("./upload_video.php");?>
<!-- Navigation -->

<div class="container-fluid">


    <div class="container-fluid" style="margin-top: 55px">

        <!-- Left Column -->
        <div class="col-sm-3">
            <?php include_once ("./admin_home_left.php");?>
            <? include_once ("./upload_video.php");?>
        </div><!--/Left Column-->





        <div class="col-lg-9">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Video ID</th>
                    <th>Video</th>
                    <th>Video Title</th>
                    <th>Video Type</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>



                <?php
                echo '<tr><form name="video_add" action="videos.php" method="post" enctype="multipart/form-data"><tr>';
                echo '<td>'.'<input type="text" class="col-lg-10 col-md-2 col-sm-2" value="" name="video_id">'.'</td>';
                echo '<td>'.'<input type="file" class="col-lg-12 col-md-2 col-sm-2" value="" name="video"></td>';
                echo '<td>'.'<input type="text" class="col-lg-10 col-md-2 col-sm-2" value="" name="video_caption">'.'</td>';
                echo '<td><input type="submit" value="upload" name="add_video"><input type="submit" value="Delete" name="delete_video"></td>';
                echo '</tr></form> ';?>


                <?php
                include_once ("./db_connect.php");
                $sql="select * from video_table";
                $result=pg_query($conn,$sql);
                while($row=pg_fetch_row($result)){

                    echo '<tr>';
                    echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$row[0].'</a></td>';
                    echo '<td><a class="thumbnail img-thumbnail col-lg-3 col-md-3 col-sm-3"><img src="./../images/video.gif" width="200px " height="100"></a></td>';
                    echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$row[1].'</a></td>';
                    echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$row[2].'</a></td>';

                    echo '</tr>';


                }

                ?>






                </tbody></table>';


</div>

    </div>
</div>

<footer class=" nav navbar-inverse  navbar-bottom" style="margin-top: 55px;">
    <div class="container">
        <a class=" center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>


</body>
</html>
