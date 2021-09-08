<form   id="messagebox" action="./message.php" method="post">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="panel-title">
                <img src="./profile/<?php echo $img ?>" class="img-circle" alt="" width="25px" height="25px">

            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <textarea  required class="form-control" name="usermsg" id="usermsg" rows="6" placeholder="Your Message..."></textarea>
            </div>
        </div>

        <div class="panel-footer panel-body">
            <label class=" col-xs-1" for="msgreceiver">To</label>
            <div class="col-xs-4 ">
                <select required  name="msgreceiver" id="msgreceiver" class="form-control ">
                    <option value=""></option>
                    <?php
                    if($guideid!='0') {
                        $sql = "SELECT * from user_table WHERE  (guide_id='$guideid' or guide_id='0') ORDER  BY user_priority DESC ";
                    }else{
                        $sql = "SELECT * from user_table WHERE  1=1 ORDER  BY user_priority DESC ";
                    }
                    $result=pg_query($conn,$sql ) or die(pg_errormessage($conn));
                    while($row=pg_fetch_row($result)) {
                        $rname = $row[3];
                        $rlname = $row[2];
                        $rfname = $row[1];

                        $str1 = '<option value="';
                        $rname;
                        $str2='" class="text-capitalize " id="';
                        $selectid=$rname;
                        $str3='">';
                        if(isset($_GET['r']) and $rname!=$name and $rname==$_GET['r']){
                            echo $str1 .$rname .$str2.$rname.'" selected '.$str3. $rfname . " " . $rlname . "</option>";
                        }
                        else if ($rname != $name) {
                            echo $str1 .$rname .$str2.$rname.$str3. $rfname . " " . $rlname . "</option>";
                        }
                    }




                    ?>

                </select>
            </div>


            <input  name="sendmsg" id="sendmsg" type="submit" align="right" style="margin-right: 20px" class="form-inline navbar-right btn btn-lg btn-primary" value="Send" >
        </div>
    </div>
</form>
        