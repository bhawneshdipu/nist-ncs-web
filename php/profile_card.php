<?php
ob_start();
include_once ("./php/profilecard_top_phpscript.php");?>
<div class="row panel panel-default">
            <div class="panel-heading">
                <!-- SIDEBAR USERPIC -->
                <div class="panel-title">
                    <img src="./profile/<?php echo $img; ?>" class="img-circle" alt="" width="130px" height="180px">
                </div>
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="panel-body container-fluid">

                <ul class="nav navbar">
                    <li>

                    <a class="text-success   container-fluid text-left text-capitalize">
                        <?php echo $fname.'  '.$lname.'<br>';?>
                        <b class="text-primary text-center" >
                            <?php echo ' (  '.$name.'  )';?>
                        </b>
                    </a>
                    </li>
                    <li>

                        <a class="text-danger  text-left " >
                            <?php echo $email ;?>
                        </a>

                    </li>

                    <li>

                        <a class="text-primary  text-left " >
                            <?php echo $nistid ;?>
                        </a>

                    </li>
                    <li>

                        <a class="text-primary  text-left " >
                            <?php echo $branch ;?>
                        </a>

                    </li>

                    <li>

                        <a class="text-primary  text-left " >
                            <?php echo $account ;?>
                        </a>

                    </li>

                    <li>

                        <a class="text-info  text-left " >
                            <?php echo $mobile ;?>
                        </a>

                    </li>
                    <li>

                        <a class="text-primary  text-left " >
                            <?php echo $gender ;?>
                        </a>

                    </li>

                    </ul>



            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="container-fluid btn btn-group">
                <a role="button" href="./message.php" class="btn btn-success btn-sm">Message</a>

            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->

            <ul class="nav navbar">
                <li>
                    <a href="./account.php">
                        <i class="glyphicon glyphicon-user"></i>
                        Account Settings </a>
                </li>
                <li>
                    <a href="./password.php">
                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                        Change Password </a>
                </li>

                <li>
                    <a href="./group.php">
                        <i class="glyphicon glyphicon-ok"></i>
                        Group Members </a>
                </li>

                <li>
                    <a href="./notice.php">
                        <i class="glyphicon glyphicon-bell"></i>
                        Notice Board </a>
                </li>

                <li>
                    <a href="./myreviews.php">
                        <i class="glyphicon glyphicon-edit"></i>
                        Reviews </a>
                </li>
            </ul>
                </div>
            <!-- END MENU -->
        </div>
