<div class="panel panel-default">
    <div class="panel-heading">
        <a class="panel-title">
            Register
        </a>
    </div>
    <div class="panel-body">
            <form class="form-horizontal" role="form" action="./register.php" method="post" id="registration-form" name="registration-form">
                <fieldset>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Full name</label>
                        <div class="col-xs-4 ">
                            <input type="text" class="form-control "  name="ufname" id="ufname" placeholder="First name" required/>

                        </div>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="ulname" id="ulname" placeholder="Last name" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-4">
                            <input type="text" name="uname" id="uname" class="form-control" placeholder="username" required>
                        </div>
                        <a class="help-block glyphicon text-success" id="usernamemsg" name="usernamemsg"></a>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >Password</label>
                        <div class="col-xs-4">
                            <input type="password" name="upass" id="upass" class="form-control" placeholder="your password"  required>
                        </div>
                        <span class="help-block" id="useropmsg" name="useropmsg"></span>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >Confirm Password</label>
                        <div class="col-xs-4">
                            <input type="password" name="ucpass"  id="ucpass"class="form-control" placeholder="your password"  required>
                        </div>
                        <span class="help-block" id="usercpmsg" name="usercpmsg"></span>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >Email</label>
                        <div class="col-xs-4">
                            <input type="email" name="uemail" id="uemail" class="form-control" placeholder="eg.-email@email.com"  required>
                        </div>
                        <span class="help-block" id="useremailmsg" name="useremailmsg"></span>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >NIST Rollno.</label>
                        <div class="col-xs-4">
                            <input type="number" name="unistid" id="unistid" class="form-control" placeholder="eg.-2016123456"  required>
                        </div>
                        <span class="help-block" id="usernistidmsg" name="usernistidmsg"></span>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Branch</label>
                        <div class="col-xs-4 selectContainer">
                            <select  name="ubranch"  id="ubranch" class="form-control">
                                <option value=""></option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE">EEE</option>
                                <option value="EIE">EIE</option>
                                <option value="EE">EE</option>
                                <option value="ME">ME</option>
                                <option value="CE">CE</option>
                                <option value="OTHER">OTHER</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >Security PIN</label>
                        <div class="col-xs-4">
                            <input type="number" name="upin" id="upin" class="form-control" placeholder="eg.-1234"  required>
                            <span class="help-block"> Security PIN in case you Forgot Password</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-xs-3 control-label" >Mobile</label>
                        <div class="col-xs-4">
                            <input type="number" required   name="umobile" id="umobile"  class="form-control" placeholder="eg.-9123456789" >
                        </div>
                        <span class="help-block" id="usermobilemsg" name="usermobilemsg"></span>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Gender</label>
                        <div class="col-xs-4 ">
                            <select  name="ugender" id="ugender" class="form-control">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Account Type</label>
                        <div class="col-xs-4 selectContainer">
                            <select  name="uaccount"  id="uaccount" class="form-control">
                                <option value=""></option>
                                <option value="mentor">Mentor</option>
                                <option value="teacher">Teacher</option>
                                <option value="student guide">Student Guide</option>
                                <option value="student">Student</option>

                            </select>
                        </div>
                    </div>


                    <div class="form-group hidden" id="userpcodediv" name="userpcodediv">
                        <label class="col-xs-3 control-label"  id="userpcodetitle" name="userpcodetitle">Pass Code</label>
                        <div class="col-xs-4" >
                            <input type="password"    name="userpcode" id="userpcode"  class="form-control"  >
                        </div>
                        <span class="help-block" id="userpcodemsg" name="userpcodemsg"></span>
                    </div>

                    <div class="form-group ">
                        <label class="col-xs-3 control-label">Guide</label>
                        <div class="col-xs-4 selectContainer">
                            <select  name="uguide"  id="uguide" class="form-control">
                                <option value=""></option>

                                <option value="0">Mentor</option>

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
                                    echo $str1 .$guide_id .$str2.$guide_id.$str3.$guide_id.". ".$guide_teacher . " ( " . $guide_student ." ) "."</option>";

                                }
                                ?>

                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-12 ">
                            <label class="col-sm-4 control-label" ></label>
                            <input  class="btn btn-lg btn-success col-xs-4 " type="submit"  name="register" id="register" value="Register" >

                        </div>
                    </div>
                </fieldset>
            </form>
            <hr>
            <a class="text-success">Already had a account ?</a>
            <br>
            <label class="col-sm-4 control-label" ></label>

            <a role="button" class="btn btn-primary btn-lg col-xs-4" href="./login.php">Login </a>

        </div>
    </div>


