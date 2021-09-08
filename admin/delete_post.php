<?php
include_once ("./db_connect.php");
if(isset($_POST['delete_post'])){
    $postid=$_POST['post_id'];
    $sql="DELETE FROM user_timeline WHERE user_timeline.id = '$postid'";
    $result=pg_query($conn,$sql );
    if($result){
        echo "deleted";
        header("Location: ./post_detail.php?m=deleted");
    }else{
        header("Location: ./post_detail.php?m=failed");
    }
}
?>
