<?php
include_once('db_connect.php');
/* $f_name,$l_name,$user_name,$user_pass,$user_email,$user_nist_id,
$user_pin,$mobile,$user_account_type, $user_gender
  */
error_reporting(0);
if(!isset($_POST['register'])){
    echo "not set";
}

$fname = $_POST['ufname'];
$lname = $_POST['ulname'];
$username = $_POST['uname'];
$userpass = $_POST['upass'];
$usercpass = $_POST['ucpass'];
$useremail = $_POST['uemail'];
$usergender = $_POST['ugender'];
$useraccounttype = $_POST['uaccount'];
$usernistid = $_POST['unistid'] ;
$userpin = $_POST['upin'];
$mobile =$_POST['mobile'];
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

$sql="INSERT INTO `user_table` (user_id, f_name, l_name, user_name, user_pass, user_email, user_nist_id, user_pin, mobile, user_account_type, user_gender) VALUES (NULL,'$fname','$lname','$username','$userpass','$useremail','$usernistid','$userpin','$mobile','$useraccounttype',' $usergender');";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(!$result){
    echo 'not inserted';
}else{
    echo 'inserted';
}
?>