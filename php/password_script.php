<?php
include_once('db_connect.php');
error_reporting(E_ALL);
if(isset($_POST['setpassword'])){


    $cpass = $_POST['uopass'];
    $npass = $_POST['upass'];

    $sql="select * from user_table where user_name='$name'";//$name is logged in user name
    $result=pg_query($conn,$sql ) or die(pg_error($conn));
    if($row=pg_fetch_row($result)){
        $name=$row[3];
        $email=$row[5];
        $nistid=$row[6];
        $pin=$row[7];
        $pass=$row[4];

        if($cpass==$pass){
            $sql = "UPDATE user_table SET  user_pass='$npass' WHERE user_name='$name';";
            $result=pg_query($conn,$sql) or die(pg_error($conn));
            if($result){
                header("Location: ./password.php?m=success");
            }else{
                header("Location: ./password.php?m=failed");
            }
        }else{
            header("Location: ./password.php?m=error");
        }


    }else {
        header("Location: ./password.php?m=notfound");
           }
}
?>