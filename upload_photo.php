<?php
/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 15/10/16
 * Time: 11:35 AM
 */

if(isset($_POST['upload_btn0'])) {
// get the tmp url\
    $errors = 0;
    $file_size = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_type = $_FILES['photo']['type'];
    $name = $_FILES['photo']['name'];
    $file_ext = strtolower(end(explode('.', $_FILES['photo']['name'])));


    $pos = strrpos($name, '.');
    $ext = substr($name, $pos + 1);
    $ext = strtolower($ext);

    if ($ext != 'jpeg' and $ext != 'jpg') {
        $errors = 1;
          echo '<script type="text/javascript">alert("'.$ext.'"+" File type not supported");</script>';
            echo '<script>$("#loading_progress").val("");
            $("#photo").val("");
            alert("hello");';
            echo '  location.href="account.php";
        
          exit()</script>';
        //header("Location: ./account.php?m=401");
    } else if ($file_size > 1024152 or $file_size <= 0) {

        $errors = 2;
        echo '<script type="text/javascript">alert( "file size should be less than 1 MB");exit();</script>';
        //header("Location: ./account.php?m=402");


    } else {


        $img = $_POST['user_name'];
        $photo_src = $_FILES['photo']['tmp_name'];
        $target_dir = "./profile/";
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $error = "";
        $target_file = $target_dir . '' . $img . "." . $imageFileType;
        $target_file1 = $target_dir . '_' . $img;//only .jpg suported

        $target_file = $target_dir . '_' . $img;


// test if the photo realy exists

        if (is_file($photo_src)) {
            // photo path in our example
            $photo_dest = $target_file;
            // copy the photo from the tmp path to our path
            //copy($photo_src1, $photo_dest);

            move_uploaded_file($photo_src, $photo_dest);

            // call the show_popup_crop function in JavaScript to display the crop popup
            chmod($photo_dest, 0777);
            echo '<script type="text/javascript">window.top.window.show_popup_crop("' . $photo_dest . '")</script>';
        }

    }
}

?>