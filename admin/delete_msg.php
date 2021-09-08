<?php
include_once ("./db_connect.php");
if(isset($_POST['delete_msg'])){
    $msgid=$_POST['message_id'];
    $sql="DELETE FROM user_messages WHERE user_messages.id = '$msgid'";
    $result=pg_query($conn,$sql );
    if($result){
        echo "deleted";
        header("Location: ./message_detail.php?m=deleted");
    }else{
        header("Location: ./message_detail.php?m=failed");
    }
}
?>
