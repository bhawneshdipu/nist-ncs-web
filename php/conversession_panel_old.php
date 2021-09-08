<?php
include_once 'db_connect.php';
error_reporting(0);

//        echo $name."  current user name";
$receiver=$_GET['r'];
if(isset($_GET['page']))
$page=$_GET['page'];
else
    $page=0;


$from=5*$page;
$limit=5;

$sql=" select `id` from user_messages where 1 order by msg_time DESC LIMIT $from,$limit";

$result=pg_query($conn,$sql);
$row=pg_fetch_row($result);
$ofset=$page*4;
$limit=4;
$sql = "SELECT * FROM user_messages  where (`receiver`='$receiver' and   `sender`='$name')  or (`receiver`='$name' and   `sender`='$receiver') ORDER BY msg_time DESC LIMIT $ofset,$limit";
$data = pg_query($conn,$sql) or die(pg_error($conn));

$stylel1='<div class="panel ';
$stylel1_5='"><div class="panel-heading"><div class="panel-title"> <img src="./profile/';
$name;
$stylel2=' "class="img-circle"  alt="" width="25px" height="25px">';
$stylel3='</div></div><div class="panel-body"><div class="form-group">';
$msg;
$stylel4='</div></div></div>';

$styler1='<div class="panel ';
$styler1_5='"><div class="panel-heading"><div class="panel-title " align="right"> <img src="./profile/';
$name;
$styler2=' "class="img-circle " align="right"  alt="" width="25px" height="25px">';
$styler3='</div></div><div class="panel-body" align="right"><div class="form-group">';
$msg;
$styler4='</div></div></div>';



while($row = pg_fetch_row($data)){
    $msg_sender = $row[1];
    $date=date_create($row[4]);
    $time=date_format($date, 'g:ia \o\n l jS F Y');
    $msg= $row[3];
    $msg_receiver=$row[2];

    if ($msg_sender == $name) {

        $sql1="SELECT `f_name`,`l_name`,`user_image` from `user_table` where `user_name`='$msg_sender'";
        $senRow=pg_query($conn,$sql1 );
        $sendata=pg_fetch_row($senRow);
        $senFullname=$sendata[0]." ".$sendata[1];
        $class = "panel-info text-capitalize";
        $img=$sendata[2];
        echo $stylel1 . $class . $stylel1_5 . $img . $stylel2 . "  " . $senFullname . "&nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;  " . $time . $stylel3 . $msg . $stylel4;

    }else {

        $sql2="SELECT `f_name`,`l_name`,`user_image` from `user_table` where `user_name`='$msg_sender'";
        $recRow=pg_query($conn,$sql2 );
        $recdata=pg_fetch_row($recRow);
        $recFullname=$recdata[0]." ".$recdata[1];
        $img=$recdata[2];
        $class = "panel-warning text-capitalize";
        echo $styler1 . $class . $styler1_5 . $img . $styler2 . " " . $recFullname . " &nbsp;&nbsp;&nbsp;  at " . $time ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $styler3 . $msg . $styler4;
    }
}
?>