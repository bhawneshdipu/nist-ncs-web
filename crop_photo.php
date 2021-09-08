<?php
// Target siz
$targ_w = $_POST['targ_w'];
$targ_h = $_POST['targ_h'];
// quality
$jpeg_quality = 90;
// photo path
$src = $_POST['photo_url'];

// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
// crop photo
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
// create the physical photo
chmod($dst_r,0777);

imagejpeg($dst_r,$src,$jpeg_quality);
chmod($dst_r,0777);
// display the  photo - "?time()" to force refresh by the browser
$pos=strpos($src,'_');
$first=substr($src,0,$pos);
$last=substr($src,$pos+1);
$new_src=$first.$last;
rename($src,$new_src);
chmod($new_src,0777);
$pos=strrpos($last,'.');
$usr=substr($last,0,$pos);
include_once('db_connect.php');
error_reporting(E_ALL);
//error_reporting(0);
ini_set('display_errors',1 );
//print_r(headers_list());

$sql = "UPDATE user_table SET user_image='$last' WHERE user_table.user_name = '$usr'";
$result = pg_query($conn, $sql) or die(pg_errormessage($conn));

echo '<img src="'.$new_src.'">';
exit;
?>