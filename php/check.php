<?php
    include_once ("./db_connect.php");
    if(isset($_POST['action']) and $_POST['action']=='usernameavailability'){
        $username=$_POST['username'];
        $sql="select * from user_table where user_name='$username'";
        $result=mysqli_query($conn,$sql );
        //echo mysqli_error($conn);
        //echo mysqli_sqlstate($conn);
        $ans=(mysqli_num_rows($result));
        echo $ans;

    }else if(isset($_POST['action']) and $_POST['action']=='useremailavailability'){
        $useremail=$_POST['useremail'];
        $sql="select * from user_table where user_email='$useremail'";
        $result=mysqli_query($conn,$sql );
        //echo mysqli_error($conn);
        //echo mysqli_sqlstate($conn);
        $ans=(mysqli_num_rows($result));
        echo $ans;

    }else if(isset($_POST['action']) and $_POST['action']=='usernistidavailability'){
        $usernistid=$_POST['usernistid'];
        $sql="select * from user_table where user_nist_id='$usernistid'";
        $result=mysqli_query($conn,$sql );
        //echo mysqli_error($conn);
        //echo mysqli_sqlstate($conn);
        $ans=(mysqli_num_rows($result));
        echo $ans;

    }else if(isset($_POST['action']) and $_POST['action']=='usermobileavailability'){
        $usermobile=$_POST['usermobile'];
        $sql="select * from user_table where mobile='$usermobile'";
        $result=mysqli_query($conn,$sql );
        //echo mysqli_error($conn);
        //echo mysqli_sqlstate($conn);
        $ans=(mysqli_num_rows($result));
        echo $ans;

    }
?>