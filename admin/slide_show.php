<!DOCTYPE html>
<html lang="en">
<head>
<title>Slide Show</title>
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
<!-- Navigation -->

<div class="container-fluid">


    <div class="container-fluid" style="margin-top: 55px">

        <!-- Left Column -->
        <div class="col-sm-3">
            <?php include_once ("./admin_home_left.php");?>
        </div><!--/Left Column-->


        <?php include_once ("./list_caption.php");?>
        <div class="col-lg-9">




            <div class="row">
            <div class="col-lg-8">
                <div id="photo_container1">
                    <img src="./../images/slide1.jpg">
                </div>
            </div>
            <!-- content -->

            <div class="col-lg-4 " >
                <form action="add_caption.php" method="post">
                    Title<br><input type="text" class="input form-control" name="title1" id="title1" placeholder="<?php echo $title1;?>"><br>
                    Heading<textarea class="form-control" name="heading1" id="heading1" rows="1" placeholder="<?php echo $heading1;?>"></textarea>
                    <input type="submit" value="ADD" id="add1" class="btn btn-default btn-primary ">
                </form>
                <br>
                <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                    <input type="file" name="photo1" id="photo1" class="file_input">
                    <div id="loading_progress"></div>
                    <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn1">
                </form>
                </div>
            </div>
            <br>
            <br>




            <div class="row">
            <div class="col-lg-8">
            <br>
            <div id="photo_container2">
                <img src="./../images/slide2.jpg">
            </div>
            </div>
        <!-- content -->

            <div class="col-lg-4 " >
            <form action="add_caption.php" method="post">
                Title<br><input type="text" class="input form-control" name="title2" id="title2" placeholder="<?php echo $title2;?>"><br>
                Heading<textarea class="form-control" name="heading2" id="heading2" rows="1" placeholder="<?php echo $heading2;?>"></textarea>
                <input type="submit" value="ADD" id="add2" class="btn btn-default btn-primary ">
            </form>
            <br>
            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                <input type="file" name="photo2" id="photo2" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn2">
            </form>

            </div>
            </div>
            <br>
            <br>




            <div class="row">
            <div class="col-lg-8">
            <div id="photo_container3">
                <img src="./../images/slide3.jpg">
            </div>
            </div>
        <!-- content -->

            <div class="col-lg-4 ">
            <form action="add_caption.php" method="post">
                Title<br><input type="text" class="input form-control" name="title3" id="title3" placeholder="<?php echo $title3;?>"><br>
                Heading<textarea class="form-control" name="heading3" id="heading3" rows="1" placeholder="<?php echo $heading3;?>"></textarea>
                <input type="submit" value="ADD" id="add3" class="btn btn-default btn-primary ">
            </form>
            <br>
            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                <input type="file" name="photo3" id="photo3" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn3">
            </form>
            </div>
            </div>
            <br><br>


                <div class="row">
                    <div class="col-lg-8">
                        <div id="photo_container4">
                            <img src="./../images/slide4.jpg">
                        </div>
                    </div>
                    <!-- content -->

                    <div class="col-lg-4 ">
                        <form action="add_caption.php" method="post">
                            Title<br><input type="text" class="input form-control" name="title4" id="title4" placeholder="<?php echo $title4;?>"><br>
                            Heading<textarea class="form-control" name="heading4" id="heading4" rows="1" placeholder="<?php echo $heading4;?>"></textarea>
                            <input type="submit" value="ADD" id="add4" class="btn btn-default btn-primary ">
                        </form>
                        <br>
                        <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                            <input type="file" name="photo4" id="photo4" class="file_input">
                            <div id="loading_progress"></div>
                            <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn4">
                        </form>
                    </div>
                    </div>
                    <br>
                    <br>



                    <div class="row">
                        <div class="col-lg-8">
                            <div id="photo_container5">
                                <img src="./../images/slide5.jpg">
                            </div>
                        </div>
                        <!-- content -->

                        <div class="col-lg-4 ">
                            <form action="add_caption.php" method="post">
                                Title<br><input type="text" class="input form-control" name="title5" id="title5" placeholder="<?php echo $title5;?>"><br>
                                Heading<textarea class="form-control" name="heading5" id="heading5" rows="1" placeholder="<?php echo $heading5;?>"></textarea>
                                <input type="submit" value="ADD" id="add5" class="btn btn-default btn-primary ">
                            </form>
                            <br>
                            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                                <input type="file" name="photo5" id="photo5" class="file_input">
                                <div id="loading_progress"></div>
                                <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn5">
                            </form>
                        </div>
                        </div>


</div><!-- content -->


    <!-- container -->

    <!-- The popup for upload new photo -->
            <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
            <h2>Upload photo</h2>
            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" id="upload_btn">
            </form>
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>

    <!-- The popup for crop the uploaded photo -->
            <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onclick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
            <!-- This is the image we're attaching the crop to -->
            <img id="cropbox" />
            
            <!-- This is the form that our event handler fills -->
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                <input type="button" value="Crop Image" id="crop_btn" onclick="crop_photo()" />
            </form>
        </div>
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
