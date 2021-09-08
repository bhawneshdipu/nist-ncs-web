<?php
include_once('./db_connect.php');
//error_reporting(E_ALL);
if(!isset($_POST['register'])){
    echo "register not set";
    //header("Location: ./register.php?not_registered");//results in too many redirects
}else {

    $fname = $_POST['ufname'];
    $lname = $_POST['ulname'];
    $username = $_POST['uname'];
    $userpass = $_POST['upass'];
    $usercpass = $_POST['ucpass'];
    $useremail = $_POST['uemail'];
    $usergender = $_POST['ugender'];
    $useraccounttype = $_POST['uaccount'];
    $usernistid = $_POST['unistid'];
    $userpin = $_POST['upin'];
    $mobile = $_POST['umobile'];
    $guide_id=$_POST['uguide'];
    $userpriority=1;
    $user_branch=$_POST['ubranch'];
    echo 'hello  ' . "<br>";
    print $username . " name  " . "<br>";
    echo $fname . "  fname" . "<br>";
    echo $lname . "  lname" . "<br>";
    echo $useremail . " email " . "<br>";
    echo $usergender . " gender " . "<br>";
    echo $useraccounttype . " account type " . "<br>";
    echo $mobile . " mobile " . "<br>";
    echo $userpass . " pass ";
    echo $useraccounttype."accounttype";
    echo "hello";
    if($useraccounttype=="student guide"){
        $userpriority=3;
    }else if($useraccounttype=="teacher"){
        $userpriority=6;
    }else if($useraccounttype=="mentor"){
        $userpriority=9;
    }
    echo $userpriority."user_priority";
        $sql = "INSERT INTO user_table ( f_name, l_name, user_name, user_pass, user_email, user_nist_id,user_branch, user_pin, mobile, user_account_type, user_gender,guide_id,user_priority) VALUES ('$fname','$lname','$username','$userpass','$useremail','$usernistid','$user_branch','$userpin','$mobile','$useraccounttype',' $usergender','$guide_id','$userpriority');";
echo $sql;
        echo 'hello  ' . "<br>";
    print $username . " name  " . "<br>";
    echo $fname . "  fname" . "<br>";
    echo $lname . "  lname" . "<br>";
    echo $useremail . " email " . "<br>";
    echo $usergender . " gender " . "<br>";
    echo $useraccounttype . " account type " . "<br>";
    echo $mobile . " mobile " . "<br>";
    echo $userpass . " pass ";

    echo "hello";

    /* check username */
    $sql = "SELECT * FROM user_table WHERE user_name='$username'";
    $result = pg_query($sql);
    if(!$result){
        echo "not executed-------------------->";
    }
    $row = pg_num_rows($result);
    echo "username ".$row;
    if ($row[0]) {
        unset($_POST);
        //echo '<script>location.replace(\"./register.php?error=5\"); </script>';
        header("Location: ./register.php?error=5");
    } else {

        /* check email */
        $sql = "SELECT * FROM user_table WHERE user_email='$useremail'";
        $result = pg_query( $sql);
        $row = pg_num_rows($result);
        echo "email ".$row;
        if ($row> 0) {

            unset($_POST);
      //      echo '<script>location.replace(\"./register.php?error=4\"); </script>';
               header("Location: ./register.php?error=4");
        } else {

            /* check usernistid */
            $sql = "SELECT * FROM user_table WHERE user_nist_id='$usernistid'";
            $result = pg_query($sql);
            $row = pg_num_rows($result);
            echo "nistid ".$row;
            if ($row > 0) {

                unset($_POST);
                echo "nistid";
      //          echo '<script>location.replace(\"./register.php?error=3\"); </script>';
                header("Location: ./register.php?error=3");
            } else {


                /* check usermobile */
                $sql = "SELECT * FROM user_table WHERE mobile='$mobile'";
                $result = pg_query($conn, $sql);
                $row = pg_num_rows($result);
                echo "mobile".$mobile;
                if ($row > 0) {

             unset($_POST);
                    echo "mobile";
                   header("Location: ./register.php?error=2");
                } else {


                    $sql = "INSERT INTO user_table ( f_name, l_name, user_name, user_pass, user_email, user_nist_id,user_branch, user_pin, mobile, user_account_type, user_gender,guide_id,user_priority) VALUES ('$fname','$lname','$username','$userpass','$useremail','$usernistid','$user_branch','$userpin','$mobile','$useraccounttype','$usergender','$guide_id','$userpriority');";
                    echo $sql;
                    $result = pg_query($conn, $sql) or die(pg_errormessage());
                    echo $result." inserted or not";
                    if (!$result) {

                        header("Location: ./register.php.php?error=1");
                    } else {

                        header("Location: ./login.php?error=0");
                        echo 'inserted';
                    }
                }
            }
        }
    }
}

?>