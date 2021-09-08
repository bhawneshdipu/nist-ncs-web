<?php
include_once ('db_connect.php');
error_reporting(E_ALL);
$id=$_SESSION["user_id"];
$sql=" SELECT * from user_table WHERE user_id='$id';" ;
$result = pg_query($conn,$sql) or die(pg_errormessage($conn)) ;
$row=pg_fetch_array($result);
if(pg_num_rows($result)==1) {
    $fname = $row[1];
    $lname = $row[2];
    $name = $row[3];
    $pass=$row[4];
    $email = $row[5];
    $nistid = $row[6];
    $branch=$row[7];
    $pin = $row[8];
    $mobile = $row[9];
    $account = $row[10];
    $gender = $row[11];
    $img = $row[12];
    $guideid=$row[13];
    $user_priority=$row[14];
}else{

    echo "SORRY NO ONE THERE... ";
}
?>