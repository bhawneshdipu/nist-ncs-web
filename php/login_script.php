<?php
include_once("./db_connect.php");

if(!isset($_POST['login'])){
    //header("Location: ./login.php?error=1");

}else{
    $username = addslashes($_POST['uname']);
    $userpass = addslashes($_POST['upass']);
    $sql=" SELECT * from user_table WHERE user_name='$username' and user_pass='$userpass'" ;
     echo $sql.";";
    $result = pg_query($conn,$sql) ;
    if($result) {
        $row = pg_fetch_array($result);
        if (pg_num_rows($result) == 1) {

            $_SESSION["user_id"] = $row[0];
            //echo $_SESSION["user_id"];
            header("Location: ./home.php?m=welcome");
        } else {
            header("Location: ./login.php?error=404");
        }
    }else{
        header("Location: ./login.php?error=404");

    }
}
//ob_end_flush();
?>