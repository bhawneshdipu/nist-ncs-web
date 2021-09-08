<?php
/**
 * Created by IntelliJ IDEA.
 * User: dipu
 * Date: 27/8/16
 * Time: 1:04 AM
 */
if(isset($_POST['post_notice'])){
        $title=$_POST['notice_title'];
        $subtitle=$_POST['notice_subtitle'];
        $body=$_POST['notice_body'];
        $master=$name;

        $sql="insert into  notice_table (notice_title,notice_subtitle,notice_body,notice_date,notice_master,guide_id) values('$title','$subtitle','$body',now(),'$name','$guideid')";
        $result=pg_query($conn,$sql );
        if($result){
            header("Location: ./notice.php?m=success");
        }else{
            header("Location: ./notice.php?m=failed");
        }

}