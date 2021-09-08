<?php
include_once 'db_connect.php';
error_reporting(0);

$sql = "SELECT * FROM user_timeline ORDER BY post_time DESC";
$data = pg_query($conn,$sql);
$counter=0;
$stylel1='<div class="panel ';
$stylel1_5='"><div class="panel-heading"><div class="panel-title text-capitalize"> <img src="./profile/';
$stylel2=' "class="img-circle" alt="" width="25px" height="25px">';
$stylel3='</div></div><div class="panel-body"><div class="form-group ">';
$stylel4='</div></div></div>';


$styler1='<div class="panel ';
$styler1_5='"><div class="panel-heading " align="right" ><div class="panel-title text-capitalize"> <img src="./profile/';
$styler2=' "class="img-circle" align="right" alt="" width="25px" height="25px">';
$styler3='</div></div><div class="panel-body " align="right" ><div class="form-group ">';
$styler4='</div></div></div>';
while($row = pg_fetch_array($data)){
    $msg = $row['sender_post'];
    $time = $row['post_time'];
    $date=date_create($time);
    $time=date_format($date, 'g:ia \o\n l jS F Y');
    $username=$row[1];

    $fullname=$row[1]." ".$row[2];
    if ($username != $name) {
        $sql1="SELECT f_name,l_name,user_image from user_table where user_name='$username'";
        $senRow=pg_query($conn,$sql1 );
        $sendata=pg_fetch_row($senRow);
        $fullname=$sendata[0]." ".$sendata[1];
        $img=$sendata[2];
        $class = "panel-warning ";
        echo $styler1 . $class . $styler1_5 . $img . $styler2 . " " . $fullname . "   Posted at " . $time."&nbsp;&nbsp;&nbsp;" . $styler3 . $msg . $styler4;

    }else {
        $sql1="SELECT f_name, l_name , user_image  from  user_table  where  user_name ='$username'";
        $senRow=pg_query($conn,$sql1 );
        $sendata=pg_fetch_row($senRow);
        $fullname=$sendata[0]." ".$sendata[1];
        $img=$sendata[2];

        $class = "panel-info";
        echo $stylel1 . $class . $stylel1_5 . $img . $stylel2 . " " . $fullname . "   Posted at " . $time . $stylel3 . $msg . $stylel4;
    }
}
?>

