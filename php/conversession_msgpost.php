<?php
if(isset($_POST['sendmsg'])) {
    $sender = $name;
    $msg = $_POST['usermsg'];
    $receiver = $_POST['msgreceiver'];
    if ($sender == "" or $msg == "" or $receiver == "") {
        header("Location: ./php/conversession.php?m=empty&r=$receiver");
    } else {
        $sql = "INSERT INTO user_messages (sender, receiver, msg, msg_time) VALUES ('$sender', '$receiver', '$msg',NOW())";
        $result = pg_query($conn, $sql) or die(pg_errormessage($conn));
//        echo $sender . " sender " . $msg . " msg " . $receiver;
        if ($result) {
            //echo "<script> alert('msg sent')</script>";
            unset($_POST);
            header("Location: ./conversession.php?m=success&r=$receiver");
        } else {
            header("Location: ./conversession.php?m=failed&r=$receiver");
        }
    }
}else{
    //header("Location: ./conversession.php?m=empty&r=$receiver");//to many redirects
}
?>