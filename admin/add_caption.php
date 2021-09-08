<?php

/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 17/10/16
 * Time: 4:00 PM
 */
include_once('db_connect.php');
if(isset($_POST['title1']) and isset($_POST['heading1'])){
    $title=$_POST['title1'];
    $heading=$_POST['heading1'];
    $sql="SELECT * from slide_table where slide_id='1'";
    $result = pg_query($conn, $sql);
    $row=pg_num_rows($result);
    if($row>0){
        $sql="UPDATE slide_table SET slide_title='$title' ,slide_msg='$heading' WHERE  slide_id='1'";
        $result = pg_query($conn, $sql);
        //echo "update";

    }else {
        $sql = " INSERT INTO slide_table ( slide_id,slide_title, slide_msg) VALUES ( '1', '$title', '$heading')";
        $result = pg_query($conn, $sql);
       // echo "insert";
    }
    if ($result) {
        header("Location: ./slide_show.php?m=added");

    } else {
        header("Location: ./slide_show.php?m=add failed");
    }

} else if((isset($_POST['title2']) and isset($_POST['heading2']))){
    $title=$_POST['title2'];
    $heading=$_POST['heading2'];
    $sql="SELECT * from slide_table where slide_id='2'";
    $result = pg_query($conn, $sql);
    $row=pg_num_rows($result);
    if($row>0){
        $sql="UPDATE slide_table SET slide_title='$title' ,slide_msg='$heading' WHERE  slide_id='2'";
        $result = pg_query($conn, $sql);
        echo "update2";

    }else {
        $sql = " INSERT INTO slide_table ( slide_id,slide_title, slide_msg) VALUES ( '2', '$title', '$heading')";
        $result = pg_query($conn, $sql);
         echo "insert2";
    }
    if ($result) {
        header("Location: ./slide_show.php?m=added");
    } else {
        header("Location: ./slide_show.php?m=add failed");
    }

} else if(isset($_POST['title3']) and isset($_POST['heading3'])){
    $title=$_POST['title3'];
    $heading=$_POST['heading3'];
    $sql="SELECT * from slide_table where slide_id='3'";
    $result = pg_query($conn, $sql);
    $row=pg_num_rows($result);
    if($row>0){
        $sql="UPDATE slide_table SET slide_title='$title' ,slide_msg='$heading' WHERE  slide_id='3'";
        $result = pg_query($conn, $sql);
        echo "update3";

    }else {
        $sql = " INSERT INTO slide_table ( slide_id,slide_title, slide_msg) VALUES ( '3', '$title', '$heading')";
        $result = pg_query($conn, $sql);
         echo "insert3";
    }if ($result) {
        header("Location: ./slide_show.php?m=added");
    } else {
        header("Location: ./slide_show.php?m=add failed");
    }

} else if(isset($_POST['title4']) and isset($_POST['heading4'])){
    $title=$_POST['title4'];
    $heading=$_POST['heading4'];
    $sql="SELECT * from slide_table where slide_id='4'";
    $result = pg_query($conn, $sql);
    $row=pg_num_rows($result);
    if($row>0){
        $sql="UPDATE slide_table SET slide_title='$title' ,slide_msg='$heading' WHERE  slide_id='4'";
        $result = pg_query($conn, $sql);
        echo "update4";

    }else {
        $sql = " INSERT INTO slide_table ( slide_id,slide_title, slide_msg) VALUES ( '4', '$title', '$heading')";
        $result = pg_query($conn, $sql);
        echo "insert4";
    }if ($result) {
        header("Location: ./slide_show.php?m=added");
    } else {
        header("Location: ./slide_show.php?m=add failed");
    }

} else if(isset($_POST['title5']) and isset($_POST['heading5'])){
    $title=$_POST['title5'];
    $heading=$_POST['heading5'];
    $sql="SELECT * from slide_table where slide_id='5'";
    $result = pg_query($conn, $sql);
    $row=pg_num_rows($result);
    if($row>0){
        $sql="UPDATE slide_table SET slide_title='$title' ,slide_msg='$heading' WHERE  slide_id='5'";
        $result = pg_query($conn, $sql);
        echo "update5";

    }else {
        $sql = " INSERT INTO slide_table ( slide_id,slide_title, slide_msg) VALUES ( '5', '$title', '$heading')";
        $result = pg_query($conn, $sql);
        echo "insert5";
    }if ($result) {
        header("Location: ./slide_show.php?m=added");
    } else {
        header("Location: ./slide_show.php?m=add failed");
    }

}
?>