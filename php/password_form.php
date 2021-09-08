<?php include_once ("./php/password_script.php");?>
<div class="panel panel-default">
    <div class="panel-heading">
        <a class="panel-title">
            Change  Password
        </a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="./password.php" method="post">
            <div class="form-group has-success">
                <label class="col-xs-2 control-label">Current Password</label>
                <div class="col-xs-6">
                    <input type="password"  name="uopass" id="uopass" class="form-control" placeholder="current password">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="col-xs-2 control-label" >New Password</label>
                <div class="col-xs-6">
                    <input type="password" name="upass" id="upass" class="form-control" placeholder="new password">
                </div>
                <span class="help-block" id="useropmsg" name="useropmsg"></span>
            </div>
            <div class="form-group has-success">
                <label class="col-xs-2 control-label" >Confirm Password</label>
                <div class="col-xs-6">
                    <input type="password" name="ucpass" id="ucpass" class="form-control" placeholder="new password">
                </div>
                <span class="help-block" id="usercpmsg" name="usercpmsg"></span>
            </div>



            <div class="form-group">
                <div class="col-sm-12">
                    <input  class="btn btn-lg btn-success col-xs-5 " name="setpassword" type="submit" id="setpassword" class="form-control" value="Change Password" >
                </div>
            </div>
            <hr>

        </form>
    </div>
</div>
</div><!--/Center Column-->

