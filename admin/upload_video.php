<?php
/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 15/10/16
 * Time: 11:35 AM
 */


// get the tmp url
include_once ("./db_connect.php");

if(isset($_POST['add_video'])) {
    $video_src = $_FILES['video']['tmp_name'];
    $video_caption = $_POST['video_caption'];
    $video_size=$_FILES['video']['size'];
    $video_type=$_FILES['video']['name'];

    $ext=strrpos($video_type,'.');
    $video_type=substr($video_type,$ext+1);
// test if the photo realy exists
    $video_type=strtolower($video_type);
    echo "add video";
    if($video_size<2000000) {
        if (isset($_FILES['video']['tmp_name'])) {
            // photo path in our example
            // copy the photo from the tmp path to our path
            //copy($photo_src1, $photo_dest);
            $sql = "select max(video_id) from video_table";
            $result = pg_query($conn, $sql);
            $row = pg_fetch_row($result);
            $video_id = $row[0] + 1;
            echo "file exit-->".$video_type."<--type";
            $sql = " INSERT INTO video_table ( video_id,video_title, video_type) VALUES ( '$video_id', '$video_caption', '$video_type')";
            $result = pg_query($conn, $sql);
            echo $sql;
            if ($result > 0) {
                echo "file moved";
                $video_dest = './../video/'.$video_id.'.'.$video_type;
                if(move_uploaded_file($video_src, $video_dest)) {
                    chmod($video_dest, 0777);
                }else{
                    $sql = "delete from video_table where video_id='$video_id'";
                    $result = pg_query($conn, $sql);

                }

            } else {
                echo "file not moved";
                header("Location: ./videos.php?m=failed");
            }


            // call the show_popup_crop function in JavaScript to display the crop popup

        } else
            echo "file not exist";
    }
} else if(isset($_POST['delete_video'])) {
    $video_id = $_POST['video_id'];

    $sql = "delete from video_table where video_id='$video_id'";
    $result = pg_query($conn, $sql);
    if ($result) {
        $path1='./../gallery/'.$video_id.'.*';

        unlink($path1);
        header("Location: ./videos.php?m=deleted");

    }else{
        header("Location: ./videos.php?m=delete_failed");

    }
}

?>
