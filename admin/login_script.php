<?php
include_once("./db_connect.php");

if(!isset($_POST['adminlogin'])){
    //header("Location: ./login.php?error=1");

}else{
    $username = addslashes($_POST['aname']);
    $userpass = addslashes($_POST['apass']);
    $sql=" SELECT * from admin_table WHERE admin_name='$username' and admin_pass='$userpass'" ;
    echo $sql.";";
    $result = pg_query($conn,$sql) or die(pg_errormessage($conn)) ;
    $row=pg_fetch_array($result);

    if(pg_num_rows($result)==1){

        $_SESSION["admin_id"]=$row[0];
        echo $_SESSION["admin_id"]."session id";
        header("Location: ./home.php?m=welcome");
    }else{
        header("Location: ./index.php?error=404");
    }
}
//ob_end_flush();
?>