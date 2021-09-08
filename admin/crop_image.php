<?php
// Target siz


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $targ_w = $_POST['w'];
    $targ_h =$_POST['h'];
    $jpeg_quality = 90;

    $src = $_POST['image_url'];
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);

    $img=imagejpeg($dst_r,$src,$jpeg_quality);
    chmod($src,0777);
    header("Location: ./images.php?m=added");
    exit;
}

?>