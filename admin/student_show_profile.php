<?php
if(isset($_GET['student'])) {
$name = $_GET['student'];
$sql = " SELECT * from user_table WHERE user_name='$name' ";
echo $sql;
$result = pg_query($conn, $sql) or die(pg_errormessage($conn));
if (pg_num_rows($result) == 1) {
    $row = pg_fetch_array($result);
    $id = $row[0];
    $viewfname = $row[1];
    $viewlname = $row[2];
    $viewname = $row[3];
    $viewpass = $row[4];
    $viewemail = $row[5];
    $viewnistid = $row[6];
    $viewbranch=$row[7];
    $viewpin = $row[8];
    $viewmobile = $row[9];
    $viewaccount = $row[10];
    $viewgender = $row[11];
    $viewimg = $row[12];
    $viewguideid = $row[13];
    $priority = $row[14];


?>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class=" row col-xs-4 col-sm-4 col-md-4">
        <br><br><br>
        <img src="./../profile/<?php echo $viewimg; ?>" class="img img-circle" width="250px" height="250px">
    </div>

    <div class="panel panel-default col-xs-12 col-sm-12 col-md-12">

        <div class="panel-heading">
            <a class="panel-title">
                Information Details
            </a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="./edit.php" method="post" id="edit_form"
                  name="edit_form" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Full name</label>
                        <div class="col-xs-5 ">
                            <input readonly  type="text" class="form-control " name="ufname" id="ufname"
                                   value="<?php echo $viewfname; ?>" required/>

                        </div>
                        <div class="col-xs-4">
                            <input readonly  type="text" class="form-control" name="ulname" id="ulname"
                                   value="<?php echo $viewlname; ?>"/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input readonly type="text" name="uname" id="uname" class="form-control"
                                   value="<?php echo $viewname; ?> " required>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input readonly  type="text" name="upass" id="upass" class="form-control"
                                   value="<?php echo $viewpass; ?>" required>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input readonly type="email" name="uemail" id="uemail" class="form-control"
                                   value="<?php echo $viewemail; ?>" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">NIST Rollno.</label>
                        <div class="col-xs-5">
                            <input readonly type="number" name="unistid" id="unistid" class="form-control"
                                   value="<?php echo $viewnistid; ?>" required>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Branch.</label>
                        <div class="col-xs-5">
                            <input readonly type="text" name="ubranch" id="ubranch" class="form-control"
                                   value="<?php echo $viewbranch; ?>" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Security PIN</label>
                        <div class="col-xs-5">
                            <input readonly  type="number" name="upin" id="upin" class="form-control" value="<?php echo $viewpin; ?>"
                                   required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Mobile</label>
                        <div class="col-xs-5">
                            <input readonly  type="text" required name="mobile" id="mobile" class="form-control"
                                   value="<?php echo $viewmobile; ?>">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Account</label>
                        <div class="col-xs-5">
                            <input readonly type="text" name="uaccount" id="uaccount" class="form-control"
                                   value="<?php echo $viewaccount; ?>">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Gender</label>
                        <div class="col-xs-5">
                            <input readonly  type="text" name="ugender" id="ugender" class="form-control"
                                   value="<?php echo $viewgender; ?>">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Guide ID</label>
                        <div class="col-xs-5">
                            <input readonly  type="text" name="uguideid" id="uguideid" class="form-control"
                                   value="<?php echo $viewguideid; ?>">
                        </div>
                    </div>

                    <div hidden class="form-group ">
                        <label class="col-xs-3 control-label">user ID</label>
                        <div class="col-xs-5">
                            <input readonly  type="text" name="userid" id="userid" class="form-control"
                                   value="<?php echo $id; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 col-lg-12">
                            <label class="col-sm-2 control-label"></label>
                            <input class="btn btn-lg btn-info col-xs-3 col-md-3 col-lg-3 " type="submit" name="edit"
                                   value="Edit">
                            <label class="col-sm-1 control-label"></label>
                            <input class="btn btn-lg btn-danger col-xs-3 col-md-3 col-lg-3" type="submit" formaction="./delete_user.php" name="delete"
                                   value="Delete">

                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <?php } else {
        echo pg_num_rows($result);
        $name = $_GET['student'];
        $sql = " SELECT * from user_table WHERE user_name='$name' ";
        echo $sql;
        echo "     SORRY NO ONE THERE...  IN YOUR GROUP  LIKE " . $_GET['student'];

    }
    }?>
