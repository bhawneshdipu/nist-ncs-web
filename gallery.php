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


<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: xx-large"; >
                <b class="text-primary">Gallery</b>
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:x-large">

            <?php
                if(isset($_GET['album_id'])){
                $album_id=$_GET['album_id'];
                }else{
                    $album_id=0;
                }

                if($album_id!=0) {
                    $sql = "select album_name from album_table where album_id=$album_id;";

                    $result=pg_query($conn,$sql);
                    $row2=pg_fetch_row($result) ;
                    $album_name=$row2[0];

                        $sql1 = "select * from image_table where album_id=$album_id;";
                        $result1=pg_query($conn,$sql1);
                        if(pg_num_rows($result1)>0)
                        while($row1=pg_fetch_row($result1)){

                            $image_id=$row1[0];
                            $image_title=$row1[1];
                            echo '<a class="thumbnail col-lg-3 col-sm-4 col-xs-6" href="./gallery/'.$image_id.'.jpg" data-lightbox="'.$album_name.'" data-title="'.$image_title.'"><img src="./gallery/'.$image_id.'_thumb.jpg" class="thumbnail img-responsive"> </a>';


                        }

            }else{
                    $sql="select  * from album_table;";
                    $result=pg_query($conn,$sql);

                    if(pg_num_rows($result)>0)
                    while($row=pg_fetch_row($result)) {
                        $album_id=$row[0];
                        $album_name=$row[1];
                        $sql1="select count(*) from image_table where album_id=$row[0]";
                        $result1=pg_query($conn,$sql1);
                        $count=pg_fetch_row($result1);
                        echo ' <div class="panel panel-default col-lg-3 col-md-3 col-sm-3">
            <div class="panel-heading text-success" >'
                            .'<a>'.$album_name.'</a>
  
                </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" > <a class="thumbnail " href="./gallery.php?album_id='.$album_id.'"><img src="./images/gallery.gif" class="thumbnail img-responsive"></a><hr> 
            </div>
            <div class="panel-footer " style="font-size=medium"><a >'.$count[0].'  Photos</a>
                <a role="button" href="./gallery.php?album_id='.$album_id.'"   class="btn btn-info pull-right">View</a><br>
        </div></div>';



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
