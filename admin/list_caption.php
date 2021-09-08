<?php
/**
 * Created by PhpStorm.
 * User: dipu
 * Date: 17/10/16
 * Time: 4:17 PM
 */
include_once('db_connect.php');
$sql="SELECT * FROM slide_table ORDER by slide_id";
$result=pg_query($conn,$sql );
$row1=pg_fetch_row($result);
   $title1=$row1[1];
   $heading1=$row1[2];
$row2=pg_fetch_row($result);
    $title2=$row2[1];
   $heading2=$row2[2];

$row3=pg_fetch_row($result);
    $title3=$row3[1];
   $heading3=$row3[2];

$row4=pg_fetch_row($result);
$title4=$row4[1];
$heading4=$row4[2];

$row5=pg_fetch_row($result);
$title5=$row5[1];
$heading5=$row5[2];

?>
