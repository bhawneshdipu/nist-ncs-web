<?php
include_once ("./db_connect.php");
if(isset($_POST['delete'])){
    $id=$_POST['userid'];
    $sql="DELETE FROM `user_table`  WHERE `user_table`.`user_id` = '$id'";
    $result=mysqli_query($conn,$sql );
    mysqli_error($conn);
    if($result){
        echo "user deleted";
        header("Location: ./home.php?m=deleted");
    }else{
        header("Location: ./home.php?failed");
    }
}else{
    echo "not set";
}
?>