<!DOCTYPE html>
<html lang="en">
<head>
    <title>Images</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./../css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="./../css/jquery.Jcrop.css" type="text/css" />

</head>

<body>
<!-- Navigation -->
<?php include_once ("./navbar_home.php");?>

<!-- Navigation -->


    <div class="container-fluid" style="margin-top: 55px">

        <!-- Left Column -->
        <div class="col-sm-3">
            <?php include_once ("./admin_home_left.php");?>
        </div><!--/Left Column-->





        <div class="col-lg-9">
            <?php include_once ("./images_alert.php");?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image ID</th>
                    <th>Image</th>
                    <th>Image caption</th>
                    <th>Image Album</th>

                </tr>
                </thead>

                <tbody>



                <?php
                echo '<tr><form name="image_add" action="upload_image.php" method="post" enctype="multipart/form-data"><tr>';
                echo '<td>'.'<input type="text" class="col-lg-10 col-md-2 col-sm-2 form-control" value="" name="image_id">'.'</td>';
                echo '<td>'.'<input type="file"  class="col-lg-12 col-md-2 col-sm-2 form-control" value="" name="image" ></td>';
                echo '<td>'.'<input type="text" class="col-lg-10 col-md-2 col-sm-2 form-control" value="" name="image_caption">'.'</td>';


                echo '<td>'.'<select required  name="image_album" id="image_album" class="col-lg-10 col-md-2 col-sm-2 form-control" ">
                    <option value=""></option>';
                $sql = "SELECT * from album_table WHERE  1=1 ORDER  BY album_id  ";

                $result=pg_query($conn,$sql ) or die(pg_errormessage($conn));
                while($row=pg_fetch_row($result)) {
                    $a_id = $row[0];
                    $a_name = $row[1];

                    $str1 = '<option value="';
                    $a_id;
                    $str2='" class="text-capitalize " id="';
                    $selectid=$a_id;
                    $str3='">';
                    echo $str1 .$a_id .$str2.$a_id.$str3. $a_name. "</option>";

                }

                echo '<td><input type="submit" value="upload" name="add_image" onsubmit="submit_image()"><input type="submit" value="Delete" name="delete_image"></td>';
                echo '</tr></form> ';?>


                <?php
                        include_once ("./db_connect.php");
                        $sql="select * from image_table";
                        $result=pg_query($conn,$sql);
                        while($row=pg_fetch_row($result)){
                                $insql="select * from album_table where album_id='$row[2]'";
                                $inresult=pg_query($conn,$insql);
                                $inrow=pg_fetch_row($inresult);
                     echo '<tr>';
                            echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$row[0].'</a></td>';
                            echo '<td><a class="thumbnail img-thumbnail col-lg-3 col-md-3 col-sm-3"><img src="./../gallery/'.$row[0].'_thumb.jpg" width="200px " height="100"></a></td>';
                            echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$row[1].'</a></td>';
                            echo '<td><a class="col-lg-2 col-md-2 col-sm-2">'.$inrow[1].'</a></td>';
                            echo '<td></td>';
                     echo '</tr>';


                        }

                ?>


                    </tbody></table>';



        </div>
    </div>
    <!-- content -->


<footer class=" nav navbar-inverse  navbar-bottom" style="margin-top: 55px;">
        <div class="container">
            <a class=" center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
        </div>
    </footer>

<script src="./../js/jquery-1.11.3.min.js"></script>
<script src="./../js/bootstrap.min.js"></script>
<script src="./../js/jquery.Jcrop.js"></script>
</body>
</html>
