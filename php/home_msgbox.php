<form   id="messagebox" action="./timeline.php" method="post">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="panel-title">
                <img src="./profile/<?php echo $img ?>" class="img-circle" alt="" width="25px" height="25px">
                <a class="text-capitalize " ><?php echo "&nbsp;".$fname." ".$lname;?></a>
            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <textarea class="form-control" name="userpost" rows="6" placeholder="What's in your mind..."></textarea>
            </div>
        </div>
        <div class="panel-footer panel-body">
            <input  name="postmsg" id="postmsg" type="submit" align="right" style="margin-right: 20px" class="form-inline navbar-right btn btn-default btn-primary" value="Post" >
        </div>
    </div>
</form>
