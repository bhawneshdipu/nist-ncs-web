<?php
if(isset($_POST['sendmsg'])) {
    $sender = $name;
    $msg = $_POST['usermsg'];
    $receiver = $_POST['msgreceiver'];
    if ($sender == "" or $msg == "" or $receiver == "") {
            header("Location: ./message.php?m=empty");
    } else {
        $sql = "INSERT INTO user_messages (sender, receiver, msg, msg_time) VALUES ('$sender', '$receiver', '$msg',NOW())";
        $result = pg_query($conn, $sql) or die(pg_errormessage($conn));
//        echo $sender . " sender " . $msg . " msg " . $receiver;
        if ($result) {
            //echo "<script> alert('msg sent')</script>";
            unset($_POST );
            header("Location: ./message.php?m=success");

        } else {
            header("Location: ./message.php?m=failed");
        }
    }
}
?>
