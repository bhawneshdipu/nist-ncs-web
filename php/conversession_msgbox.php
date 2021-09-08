<form   id="messagebox" action="./conversession.php?r=<?php echo $_GET["r"];?>" method="post">
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
                    $rec=$_GET["r"];
                    //echo $rec."   ----".$_GET["r"].$_GET['r'];
                    $sql="SELECT * FROM user_table where user_name='$rec'";
                    $result=pg_query($conn,$sql ) or  die(pg_error($conn));
                    $row=pg_fetch_row($result);
                    $full=$row[1]." ".$row[2];
                    $rec=$row[3];
                    $str1 = '<option value="';
                    $str2='" class="text-capitalize " id="';
                    $selectid=$rname;
                    $str3='">';


                    if(isset($_GET['r'] ) and $rec!=$name)  {
                        echo $str1 . $rec . $str2 . $rec . '" selected ' . $str3 . $full . "</option>";
                    }

                    ?>

                </select>
            </div>


            <input  name="sendmsg" id="sendmsg" type="submit" align="right" style="margin-right: 20px" class="form-inline navbar-right btn btn-lg btn-primary" value="Send" >
        </div>
    </div>
</form>
        