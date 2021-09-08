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
<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px">

    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./admin_home_left.php");?>
    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-9">
        <?php
        include_once ("./db_connect.php");
        if(isset($_POST['userid'])) {
        $id = $_POST['userid'];
        $sql = " SELECT * from user_table WHERE user_id='$id' ";
        $result = pg_query($conn, $sql) or die(pg_errormessage($conn));
        $row = pg_fetch_array($result);
        if (pg_num_rows($result) == 1) {
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
                <img src="./../profile/<?php echo $viewimg; ?>" class="img img-circle" width="250px" height="250px">
            </div>

            <div class="panel panel-default">

                <div class="panel-heading">
                    <a class="panel-title">
                        Edit your Information
                    </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="./save.php" method="post" id="edit_form"
                          name="edit_form" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Full name</label>
                                <div class="col-xs-5 ">
                                    <input   type="text" class="form-control " name="ufname" id="ufname"
                                             value="<?php echo $viewfname; ?>" required/>

                                </div>
                                <div class="col-xs-4">
                                    <input   type="text" class="form-control" name="ulname" id="ulname"
                                             value="<?php echo $viewlname; ?>"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Username</label>
                                <div class="col-xs-5">
                                    <input  type="text" name="uname" id="uname" class="form-control"
                                            value="<?php echo $viewname; ?> " required>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Password</label>
                                <div class="col-xs-5">
                                    <input   type="text" name="upass" id="upass" class="form-control"
                                             value="<?php echo $viewpass; ?>" required>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Email</label>
                                <div class="col-xs-5">
                                    <input type="email" name="uemail" id="uemail" class="form-control"
                                           value="<?php echo $viewemail; ?>" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">NIST Rollno.</label>
                                <div class="col-xs-5">
                                    <input  type="number" name="unistid" id="unistid" class="form-control"
                                            value="<?php echo $viewnistid; ?>" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Branch</label>
                                <div class="col-xs-4 selectContainer">
                                    <select  name="ubranch"  id="ubranch" class="form-control">
                                        <option value=""></option>
                                        <option value="CSE" <?php if($viewbranch=='CSE') echo 'selected';?> >CSE</option>
                                        <option value="IT" <?php if($viewbranch=='IT') echo 'selected';?>>IT</option>
                                        <option value="ECE" <?php if($viewbranch=='ECE') echo 'selected';?>>ECE</option>
                                        <option value="EEE" <?php if($viewbranch=='EEE') echo 'selected';?>>EEE</option>
                                        <option value="EIE" <?php if($viewbranch=='EIE') echo 'selected';?>>EIE</option>
                                        <option value="EE" <?php if($viewbranch=='EE') echo 'selected';?>>EE</option>
                                        <option value="ME" <?php if($viewbranch=='ME') echo 'selected';?>>ME</option>
                                        <option value="CE" <?php if($viewbranch=='CE') echo 'selected';?>>CE</option>
                                        <option value="OTHER" <?php if($viewbranch=='OTHER') echo 'selected';?>>OTHER</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Security PIN</label>
                                <div class="col-xs-5">
                                    <input   type="number" name="upin" id="upin" class="form-control" value="<?php echo $viewpin; ?>"
                                             required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Mobile</label>
                                <div class="col-xs-5">
                                    <input   type="text" required name="umobile" id="umobile" class="form-control"
                                             value="<?php echo $viewmobile; ?>">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Account Type</label>
                                <div class="col-xs-4 selectContainer">
                                    <select  name="uaccount"  id="uaccount" class="form-control">
                                        <option value=""></option>
                                        <option value="mentor" <?php if($viewaccount=='mentor') echo 'selected';?> >Mentor</option>
                                        <option value="teacher" <?php if($viewaccount=='teacher') echo 'selected';?> >Teacher</option>
                                        <option value="student guide" <?php  if($viewaccount=='student guide') echo 'selected';?> >Student Guide</option>
                                        <option value="student" <?php  if($viewaccount=='student') echo 'selected';?> >Student</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Gender</label>
                                <div class="col-xs-4 ">
                                    <select  name="ugender" id="ugender" class="form-control">
                                        <option value=""></option>
                                        <option value="male" <?php if($viewgender=='male') echo 'selected' ;?> >Male</option>
                                        <option value="female" <?php  if($viewgender=='female') echo 'selected' ;?> >Female</option>';

                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="col-xs-3 control-label">Guide</label>
                                <div class="col-xs-4 selectContainer">
                                    <select  name="uguide"  id="uguide" class="form-control">
                                        <option value=""></option>

                                        <option value="0" <?php if($viewguideid=='0') echo 'selected';?>>Mentor</option>

                                        <?php
                                        $sql='select guide_id,guide_teacher,guide_student from guide_table WHERE 1=1 ';
                                        $result=pg_query($conn,$sql);
                                        while($row=pg_fetch_row($result)) {
                                            $guide_id = $row[0];
                                            $guide_teacher = $row[1];
                                            $guide_student = $row[2];
                                            //echo $guide_id.$guide_student.$guide_teacher;
                                            $str1 = '<option value="';
                                            $guide_id;
                                            $str2='" class="text-capitalize " id="';
                                            $guide_id;
                                            $str3='">';
                                            $str3_1='>';
                                            if($viewguideid!=$guide_id)
                                                echo $str1 .$guide_id .$str2.$guide_id.$str3.$guide_id.". ".$guide_teacher . " ( " . $guide_student ." ) "."</option>";
                                            else
                                                echo $str1 .$guide_id .$str2.$guide_id.'" selected '.$str3_1.$guide_id.". ".$guide_teacher . " ( " . $guide_student ." ) "."</option>";

                                        }
                                        ?>

                                    </select>
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
                                <div class="col-sm-12 ">
                                    <label class="col-sm-4 control-label"></label>
                                    <input class="btn btn-lg btn-success col-xs-4 " type="submit" name="save"
                                           value="Save Changes">

                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php } else {

                echo "SORRY NO ONE THERE...  IN YOUR GROUP  LIKE " . $_POST['userid'];

            }
            }else{
                echo "not set";
            }
            ?>
    </div>

</div>
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
