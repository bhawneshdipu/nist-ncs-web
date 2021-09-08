<?php
/**
 * Created by IntelliJ IDEA.
 * User: dipu
 * Date: 27/8/16
 * Time: 1:04 AM
 */
include_once ("./db_connect.php");

if(isset($_POST['post_review'])){
    $title=$_POST['review_title'];
    $msg=$_POST['review_msg'];
    $master=$name;
    $masterid=$id;
    $marks=$_POST['review_marks'];

    $sql="insert into  review_table (review_title,review_date,review_msg,review_marks,review_master,review_user_id) values('$title',now(),'$msg','$marks','$master','$masterid')";
    $result=pg_query($conn,$sql );
    if($result){
        header("Location: ./myreviews.php?m=success");
    }else{
         header("Location: ./myreviews.php?m=failed");
    }

}else{
    echo "not set";
}