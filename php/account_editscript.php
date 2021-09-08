<?php
include_once('db_connect.php');
error_reporting(E_ALL);
//error_reporting(0);
ini_set('display_errors',1 );
//print_r(headers_list());

/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 15/10/16
 * Time: 11:35 AM
 */


if(!isset($_POST['edit'])){
    //echo "not set";
    //header("Location: account.php?failed");//results in too many redirects
}else {

    $userfname = $_POST['ufname'];
    $userlname = $_POST['ulname'];
    //$username = $_POST['uname'];
    $userpass = $_POST['upass'];

    $useremail = $_POST['uemail'];
    //$usernistid = $_POST['unistid'];
    $userpin = $_POST['upin'];
    $usermobile = $_POST['umobile'];
    $id = $_SESSION["user_id"];
    $sql = "select * from user_table where user_id='$id'";
    $result = pg_query($conn, $sql) or die(pg_errormessage($conn));
    $row = pg_fetch_row($result);
    $name = $row[3];
    $pass = $row[4];
    $profilepic = $row[11];

    /* file check */
    $id = $_SESSION["user_id"];
    $sql = "select user_name from user_table where user_id='$id'";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_row($result);
    $name = $row[0];





        //print_r(headers_list());
        //ob_get_clean();
        $sql = "UPDATE user_table SET f_name = '$userfname', l_name = '$userlname', user_email = '$useremail',user_pin = '$userpin', mobile = '$usermobile' ,user_image='$profilepic' WHERE user_table.user_id = '$id'";
        $result = pg_query($conn, $sql) or die(pg_errormessage($conn));

        //print_r(headers_list());
        if (!$result) {
          header("Location: ./account.php?p=0");
        }else if ($result ) {
              header("Location: ./account.php?p=1");
        }else{
            unset($_POST);
            header("Location: ./account.php?pi=404");
        }
    //echo $sql;
}
?>