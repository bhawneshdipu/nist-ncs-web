<?php
/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 15/10/16
 * Time: 11:35 AM
 */


// get the tmp url
include_once ("./db_connect.php");








if(isset($_POST['add_image'])) {
    $image_src = $_FILES['image']['tmp_name'];
    $image_caption = $_POST['image_caption'];
    $image_album = $_POST['image_album'];
    $image_size=$_FILES['image']['size'];




// test if the image realy exists

    echo "add iamge";
    if($image_size<1000000 and $image_size>100) {
        if (isset($_FILES['image']['tmp_name'])) {
            // image path in our example
            // copy the image from the tmp path to our path
            //copy($image_src1, $image_dest);
            $sql = "select max(image_id) from image_table";
            $result = pg_query($conn, $sql);
            $row = pg_fetch_row($result);
            $image_id = $row[0] + 1;
            echo "file exit";
            $sql = " INSERT INTO image_table ( image_id,image_title, album_id,image_time) VALUES ( '$image_id', '$image_caption', '$image_album',now())";
            $result = pg_query($conn, $sql);
            echo $sql;
            if ($result > 0) {
                echo "file moved";

                $image_dest = './../gallery/' . $image_id . '.jpg';
                $image_thumb_dest='./../gallery/' . $image_id . '_thumb.jpg';

                /* create a new, "virtual" image */
                $virtual_image = imagecreatetruecolor(150, 100);

                /* copy source image at a resized size */
                $image_thumb=imagecreatefromjpeg($image_src);
                $img=imagecreatefromjpeg($image_src);
                $width=imagesx($img);
                $height=imagesy($img);
                imagecopyresampled($virtual_image, $image_thumb, 0, 0, 0, 0, 150, 100, $width, $height);

                /* create the physical thumbnail image to its destination */
                imagejpeg($virtual_image, $image_thumb_dest);

                move_uploaded_file($image_src, $image_dest);
                chmod($image_dest, 0777);
                chmod($image_thumb_dest, 0777);

            } else {
                echo "file not moved";
                header("Location: ./images.php?m=failed");
            }


            // call the show_popup_crop function in JavaScript to display the crop popup

        } else
            echo "file not exist";
    }
} else if(isset($_POST['delete_image'])) {
    $image_id = $_POST['image_id'];
    $sql = "delete from image_table where image_id='$image_id'";
    $result = pg_query($conn, $sql);
    if ($result) {
        $path1='./../gallery/'.$image_id.'.jpg';
        $path2='./../gallery/'.$image_id.'_thumb.jpg';

        unlink($path1);
        unlink($path2);
        header("Location: ./images.php?m=deleted");

    }else{
        header("Location: ./images.php?m=delete_failed");

    }
}

?>

<html>
<head>

    <link type="text/css" rel="stylesheet" href="./../css/jquery.Jcrop.css">
    <link type="text/css" rel="stylesheet" href="./../css/bootstrap.min.css">
    <script src="./../js/jquery.min.js"></script>
    <script src="./../js/jquery.Jcrop.js"></script>

</head>
<body>
<script>
    $(document).ready(function () {
        $('#cropbox').Jcrop({
            aspectRatio: 2,
            setSelect:   [ 100, 100, 150, 150 ],
            onSelect : updateCoords,

        },function(){
            jcrop_api = this;
        });

    });

    function updateCoords(c) {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }


</script>

<img  id="cropbox" src="<?php echo $image_dest;?> ">
<div class="col-lg-9">
    <form action="crop_image.php" enctype="multipart/form-data" method="post">

        <input type="hidden" id="x" name="x" />
        <input type="hidden" id="y" name="y" />
        <input type="hidden" id="w" name="w" />
        <input type="hidden" id="h" name="h" />
        <input type="hidden" id="image_url" name="image_url" value="<?php echo $image_dest;?>"/>
        <input type="submit" class="btn btn-lg pull-right" value="Crop Image" id="submit"  />
    </form>
</div>
</body>
</html>