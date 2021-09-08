<?php
include_once ("./db_connect.php");
if(isset($_POST['delete_notice'])){
    $noticeid=$_POST['notice_id'];
    $sql="DELETE FROM notice_table WHERE notice_id = '$noticeid'";
    $result=pg_query($conn,$sql );
    if($result){
        echo "deleted";
        header("Location: ./notice_detail.php?m=deleted");
    }else{
        echo "failed";
        header("Location: ./notice_detail.php?m=failed");
    }
}
?>
