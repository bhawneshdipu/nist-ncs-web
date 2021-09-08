<?php
include_once 'db_connect.php';
error_reporting(0);

//        echo $name."  current user name";
$receiver=$_GET['r'];
$page=0;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}

$from=$page*10;
$limit=10;

$sql = "SELECT * FROM user_messages  where (receiver='$receiver' and   sender='$name')  or (receiver='$name' and   sender='$receiver') ORDER BY msg_time DESC LIMIT $limit OFFSET $from ";
$data = pg_query($conn,$sql) or die(pg_errormessage($conn));

$stylel1='<div class="panel ';
$stylel1_5='"><div class="panel-heading"><div class="panel-title"> <img src="./profile/';
$name;
$stylel2=' "class="img-circle"  alt="" width="25px" height="25px">';
$stylel3='</div></div><div class="panel-body">';
$stylel3_5='<div class="form-group">';
$msg;
$stylel4='</div>';

$stylel4_5='</div></div>';

$styler1='<div class="panel ';
$styler1_5='"><div class="panel-heading"><div class="panel-title " align="right"> <img src="./profile/';
$name;
$styler2=' "class="img-circle " align="right"  alt="" width="25px" height="25px">';
$styler3='</div></div><div class="panel-body" align="right">';
$styler3_5='<div class="form-group">';
$msg;
$styler4='</div>';
$styler4_5='</div></div>';


$previouspanel="";
//$previousreceiver="";
$oneormoremsg=0;
while($row = pg_fetch_row($data)){
    $oneormoremsg=1;
    $msg_sender = $row[1];
    $date=date_create($row[4]);
    $time=date_format($date, 'g:ia \o\n l jS F Y');
    $msg= $row[3];
    $msg_receiver=$row[2];

    if ($msg_sender == $name) {
        $sql1="SELECT f_name,l_name,user_image from user_table where user_name='$msg_sender'";
        $senRow=pg_query($conn,$sql1 );
        $sendata=pg_fetch_row($senRow);
        $senFullname=$sendata[0]." ".$sendata[1];
        $class = "panel-info text-capitalize";
        $img=$sendata[2];
        if($previouspanel==$msg_sender){
            echo $stylel3_5.$msg.$stylel4;
        }else if($previouspanel==$msg_receiver){
            echo $styler4_5;
            echo $stylel1 . $class . $stylel1_5 . $img . $stylel2 . "  " . $senFullname . "&nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;  " . $time . $stylel3 ;
            echo $stylel3_5.$msg.$stylel4;
        }else{
            echo $stylel1 . $class . $stylel1_5 . $img . $stylel2 . "  " . $senFullname . "&nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;  " . $time . $stylel3 ;
            echo $stylel3_5.$msg.$stylel4;
        }
        $previouspanel=$msg_sender;
    }else {
        $sql2="SELECT f_name,l_name,user_image from user_table where user_name='$msg_sender'";
        $recRow=pg_query($conn,$sql2 );
        $recdata=pg_fetch_row($recRow);
        $recFullname=$recdata[0]." ".$recdata[1];
        $img=$recdata[2];
        $class = "panel-warning text-capitalize";

        if($previouspanel==$msg_receiver){
            echo $stylel4_5;
            echo $styler1 . $class . $styler1_5 . $img . $styler2 . " " . $recFullname . " &nbsp;&nbsp;&nbsp;  at " . $time ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $styler3 ;
            echo $styler3_5.$msg.$styler4;
        }else if($previouspanel==$msg_sender){
            echo $styler3_5.$msg.$styler4;
        }else{
            echo $styler1 . $class . $styler1_5 . $img . $styler2 . " " . $recFullname . " &nbsp;&nbsp;&nbsp;  at " . $time ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $styler3 ;
            echo $styler3_5.$msg.$styler4;
        }
        $previouspanel=$receiver;
    }
}
if($oneormoremsg){
    echo $stylel4_5;
}
?>