<?php
$id=$_GET['p'];
if($guideid=='0') {
    $sql = " SELECT * from user_table WHERE user_name='$id' ;";
}
else {
    $sql=" SELECT * from user_table WHERE user_name='$id' and (guide_id='$guideid' or guide_id='0');" ;
}

$result = pg_query($conn,$sql) or die(pg_errormessage($conn)) ;
$row=pg_fetch_array($result);
$exist=1;
if(pg_num_rows($result)==1) {
    $viewfname = $row[1];
    $viewlname = $row[2];
    $viewname = $row[3];
    $viewemail = $row[5];
    $viewnistid = $row[6];
    $viewbranch=$row[7];
    $viewmobile = $row[9];
    $viewaccount = $row[10];
    $viewgender = $row[11];
    $viewimg = $row[12];
}else {

    echo "SORRY NO ONE THERE...  IN YOUR GROUP  LIKE " . $_GET['p'];
    $exist = 0;
}
if($exist) {

    echo '
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <img src="./profile/' . $viewimg . '" class="img img-circle" width="250px" height="250px">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
 <div class="panel panel-default">
    
    <div class="panel-heading">
        <a class="panel-title">
            Profile
        </a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" action="#" method="post" id="edit_form" name="edit_form" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group ">
                    <label class="col-xs-3 control-label">Full name</label>
                    <div class="col-xs-5 ">
                        <input type="text" readonly class="form-control "  name="ufname" id="ufname" value="' . $viewfname . '" required/>

                    </div>
                    <div class="col-xs-4">
                        <input type="text" readonly class="form-control" name="ulname" id="ulname" value="' . $viewlname . '" />
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label">Username</label>
                    <div class="col-xs-5">
                        <input   disabled  type="text" name="uname" id="uname" class="form-control" value="' . $viewname . ' " required>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Email</label>
                    <div class="col-xs-5">
                        <input  type="email" disabled name="uemail" id="uemail" class="form-control" value="' . $viewemail . '"  required>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >NIST Rollno.</label>
                    <div class="col-xs-5">
                        <input  readonly type="number" name="unistid" id="unistid" class="form-control" value="' . $viewnistid . '"  required>
                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Branch</label>
                    <div class="col-xs-5">
                        <input  readonly type="text" name="ubranch" id="ubranch" class="form-control" value="' . $viewbranch . '"  required>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Mobile</label>
                    <div class="col-xs-5">
                        <input type="text" readonly   name="mobile" id="mobile"  class="form-control" value="' . $viewmobile . '" >
                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Account</label>
                    <div class="col-xs-5">
                        <input type="text" disabled   name="account" id="account"  class="form-control" value="' . $viewaccount . '" >
                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-xs-3 control-label" >Gender</label>
                    <div class="col-xs-5">
                        <input type="text" disabled   name="gender" id="gender"  class="form-control" value="' . $viewgender . '" >
                    </div>
                </div>
                <a role="button" class="btn btn-default btn-success" href="./conversession.php?r='.$viewname.'">Message</a>
</div>
            </fieldset>
        </form>
</div>
</div>';
}
?>
