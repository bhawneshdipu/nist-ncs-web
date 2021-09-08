<?php
include_once('db_connect.php');
error_reporting(E_ALL);
//error_reporting(0);
ini_set('display_errors',1 );


//print_r(headers_list());

if(!isset($_POST['edit'])){
    //echo "not set";
    //header("Location: account.php?failed");//results in too many redirects
}else {

    $username=$_GET['r'];
    $id=
    $sql = "select * from user_table where user_id='$id'";
    $result = pg_query($conn, $sql) or die(pg_errormessage($conn));
    $row = pg_fetch_row($result);
    $name = $row[3];
    $pass = $row[4];
    $profilepic = $row[11];

    /* file check */
    $id = $_SESSION["user_id"];
    $sql = "select user_name from user_table where user_id='$id'";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_row($result);
    $name = $row[0];
    $target_dir = "./profile/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 0;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $error = "";
    $target_file = $target_dir . $name . "." . $imageFileType;
    $target_file = $target_dir . $name . ".jpg";//only .jpg suported
    if (isset($_FILES["fileToUpload"]["name"]) and ($_FILES["fileToUpload"]["tmp_name"]!="")) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            //              echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //            echo "File is not an image.";
            $uploadOk = 0;
        }

// Check if file already exists
        if (file_exists($target_file)) {
            //          echo"Sorry, file already exists.";
            $uploadOk = 1;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            //       echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
            //      echo "Sorry, only JPG, JPEG  files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        }


    } else {
        //select a file
        $uploadOk = 0;
    }


  //  echo $pass . " ===== " . $userpass . " " . $name;
    if ($pass == $userpass) {
        if ($uploadOk and move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //      echo "changed file permission".;
            chmod($target_file, 0777);
            //    echo "The file " . $target_file . "hello" . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $uploadOk = 1;
            $profilepic = $name . ".jpg";
            //  echo $profilepic." file uploaded";
        } else {
            //echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;

        }



        //print_r(headers_list());
        //ob_get_clean();
        $sql = "UPDATE user_table SET f_name = '$userfname', l_name = '$userlname', user_email = '$useremail',user_pass = '$usernewpass',user_pin = '$userpin', mobile = '$usermobile' ,user_image='$profilepic' WHERE user_table.user_id = '$id'";
        $result = pg_query($conn, $sql) or die(pg_errormessage($conn));

        echo $sql;
        //print_r(headers_list());
        if (!$result and !$uploadOk) {
          header("Location: ./account.php?p=0&f=0");
        }else if ($result and !$uploadOk) {
              header("Location: ./account.php?p=1&f=0");
        }else if (!$result and $uploadOk) {
            header("Location: ./account.php?p=0&i=1");
        }else{
            header("Location: ./account.php?p=1&r=1");
        }
    }else{
        unset($_POST);
        header("Location: ./account.php?pi=404");
    }
    //echo $sql;
}
?>