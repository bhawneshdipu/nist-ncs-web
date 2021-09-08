<div class="panel panel-default">

    <div class="panel-heading">
        <a class="panel-title">
            Edit your Information
        </a>
    </div>

    <div class="panel-body">


        <div class="row container-fluid">
            <div class="col-lg-6">
                <div id="photo_container">
                    <img src="./profile/<?php echo $img; ?>" class="img-rounded" alt="" width="240px" height=320px">
                </div>
            </div>
            <!-- content -->

            <div class="col-lg-6 container-fluid">
                <form name="photo_form" id="photo_form" action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                    <input type="file" name="photo" id="photo" class="file_input">
                    <input type="hidden" name="user_name" id="user_name" value="<?php echo $name.'.'.'jpg' ;?>">
                    <div id="loading_progress"></div>
                    <input type="submit" value="Upload photo" class="btn btn-sm btn-primary" id="upload_btn0" name="upload_btn0">
                </form>
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















        <br>
        <br>

        <form class="form-horizontal" role="form" action="./account.php" method="post" id="edit_form" name="edit_form" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group ">
                    <label class="col-xs-3 control-label">Full name</label>
                    <div class="col-xs-5 ">
                        <input type="text" class="form-control "  name="ufname" id="ufname" value="<?php echo $fname; ?>" required/>

                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="ulname" id="ulname" value="<?php echo $lname; ?>" />
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label">Username</label>
                    <div class="col-xs-5">
                        <input   disabled  type="text" name="uname" id="uname" class="form-control" value="<?php echo $name; ?> " required>
                    </div>
                </div>



                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Email</label>
                    <div class="col-xs-5">
                        <input  type="email" name="uemail" id="uemail" class="form-control" value="<?php echo $email; ?>"  required>
                    </div>
                    <span class="help-block" id="useremailmsg" name="useremailmsg"></span>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >NIST Rollno.</label>
                    <div class="col-xs-5">
                        <input  readonly type="number" name="unistid" id="unistid" class="form-control" value="<?php echo $nistid; ?>"  required>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Security PIN</label>
                    <div class="col-xs-5">
                        <input type="number" name="upin" id="upin" class="form-control" value="<?php echo $pin; ?>"  required>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Mobile</label>
                    <div class="col-xs-5">
                        <input type="number" required   name="umobile" id="umobile"  class="form-control" value="<?php echo $mobile; ?>" >
                    </div>
                    <span class="help-block" id="usermobilemsg" name="usermobilemsg"></span>
                </div>


                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Current Password</label>
                    <div class="col-xs-5">
                        <input type="password" name="upass" id="upass" class="form-control" placeholder="Please enter your password"  required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 ">
                        <label class="col-sm-4 control-label" ></label>
                        <input  class="btn btn-lg btn-success col-xs-4 " type="submit"  name="edit"  value="Edit Changes" >

                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>