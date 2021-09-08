<?php
include_once('db_connect.php');
error_reporting(E_ALL);
if(!isset($_POST['getpassword'])){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Please fill all field
                      </div>';
}else {

    $username = $_POST['uname'];
    $useremail = $_POST['uemail'];
    $usernistid = $_POST['unistid'];
    $userpin = $_POST['upin'];
    /*echo 'hello  '."<br>";
    print $username." name  "."<br>";
    echo $fname."  fname"."<br>";
    echo $lname."  lname"."<br>";
    echo $useremail." email "."<br>";
    echo $usergender." gender "."<br>";
    echo $useraccounttype." account type "."<br>";
    echo $mobile." mobile "."<br>";
    echo $userpass." pass ";
    */
    $sql="select * from user_table where user_name='$username'";
    $result=pg_query($conn,$sql ) or die(pg_error($conn));
    if($row=pg_fetch_row($result)){
        $name=$row[3];
        $email=$row[5];
        $nistid=$row[6];
        $pin=$row[7];
        $pass=$row[4];
        if ($name == $username and $email==$useremail and $nistid==$usernistid and $pin==$userpin) {
            echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Your Password is: '.$pass.' 
                      </div>';

            //header("Location: './login.php'");
        }else{
            echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Details not Found on server 
                      </div>';

        }
    }else {
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Details not Found on server 
                      </div>';
    }
}
?>