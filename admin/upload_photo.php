<?php
/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 15/10/16
 * Time: 11:35 AM
 */


// get the tmp url

    $photo_src1 = $_FILES['photo1']['tmp_name'];
    $photo_src2 = $_FILES['photo2']['tmp_name'];
    $photo_src3 = $_FILES['photo3']['tmp_name'];
    $photo_src4 = $_FILES['photo4']['tmp_name'];
    $photo_src5 = $_FILES['photo5']['tmp_name'];


// test if the photo realy exists


    if (is_file($photo_src1)) {
        // photo path in our example
        $photo_dest = './../images/_slide1.jpg';
        // copy the photo from the tmp path to our path
        //copy($photo_src1, $photo_dest);

        move_uploaded_file($photo_src1, $photo_dest);

        // call the show_popup_crop function in JavaScript to display the crop popup
        chmod($photo_dest,0777);

        echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    }else if (is_file($photo_src2)) {
        // photo path in our example
        $photo_dest = './../images/_slide2.jpg';
        // copy the photo from the tmp path to our path
        copy($photo_src2, $photo_dest);
        // call the show_popup_crop function in JavaScript to display the crop popup
        chmod($photo_dest,0777);
        echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    }else  if (is_file($photo_src3)) {
        // photo path in our example
        $photo_dest = './../images/_slide3.jpg';
        // copy the photo from the tmp path to our path
        copy($photo_src3, $photo_dest);
        // call the show_popup_crop function in JavaScript to display the crop popup
        chmod($photo_dest,0777);
        echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    }else  if (is_file($photo_src4)) {
        // photo path in our example
        $photo_dest = './../images/_slide4.jpg';
        // copy the photo from the tmp path to our path
        copy($photo_src4, $photo_dest);
        // call the show_popup_crop function in JavaScript to display the crop popup
        chmod($photo_dest,0777);
        echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    }else  if (is_file($photo_src5)) {
        // photo path in our example
        $photo_dest = './../images/_slide5.jpg';
        // copy the photo from the tmp path to our path
        copy($photo_src5, $photo_dest);
        // call the show_popup_crop function in JavaScript to display the crop popup
        chmod($photo_dest,0777);
        echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    }


?>
