<?php 
    if(isset($_POST['save'])){
        $id=$_POST['userid'];
        $fname=$_POST['ufname'];
        $lname=$_POST['ulname'];
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];
        $uemail=$_POST['uemail'];
        $unistid=$_POST['unistid'];
        $ubranch=$_POST['ubranch'];
        $upin=$_POST['upin'];
        $umobile=$_POST['umobile'];
        $uaccount=$_POST['uaccount'];
        $ugender=$_POST['ugender'];
        $uguide=$_POST['uguide'];
        $upriority=1;
        if($uaccount=='mentor'){
            $upriority=9;
        }else if($uaccount=='teacher'){
            $upriority=6;
        }else if($uaccount=='student guide'){
            $upriority=3;
        }




        include_once ("./db_connect.php");
       // echo $id."id";
        $sql="UPDATE user_table SET f_name = '$fname', l_name = '$lname', user_name = '$uname', user_pass = '$upass', user_email = '$uemail', user_nist_id = '$unistid',user_branch='$ubranch' ,user_pin = '$upin', mobile = '$umobile', user_account_type = '$uaccount', user_gender = '$ugender', guide_id = '$uguide', user_priority = '$upriority' WHERE user_table.user_id = '$id'";
//        echo $sql;
        $result=pg_query($conn,$sql ) or  die(pg_errormessage($conn));
       // mysqli_sqlstate($conn);
        $res=pg_num_rows($result);
        if($result){
           //echo "edited";

            header("Location: ./home.php?m=success");
        }else{
            //echo "not edited".$res;
           // echo $sql;
           header("Location: ./home.php?m=failed");
        }
    }
?>