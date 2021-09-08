<?php
include_once 'db_connect.php';
error_reporting(0);

//        echo $name."  current user name";
$page=0;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
$limit=10;
$from=$page*10;
$sql = "SELECT * FROM user_messages  where (receiver='$name' or sender='$name') ORDER BY msg_time DESC LIMIT $limit OFFSET $from";
$data = pg_query($conn,$sql) or die(pg_errormessage($conn));



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
$time;
$recFullname;
$styler2_1='<img src="./profile/';
$recimg;
$styler2_5=' "class="img-circle " align="right"  alt="" width="25px" height="25px">';
$styler3='</div></div><div class="panel-body" align="right"><div class="form-group">';
$msg;
$styler4='</div></div></div>';








while($row = pg_fetch_row($data)){
    $sender = $row[1];
    $date=date_create($row[4]);
    $time=date_format($date, 'g:ia \o\n l jS F Y');
    $msg= $row[3];
    $receiver=$row[2];
    $sql="SELECT f_name,l_name from user_table where user_name='$receiver'";
    /*echo $sender."Sender";
    echo $username."user";
    echo $msg."msg";
      echo $receiver."receiver";*/
    if ($receiver != $name) {

        $sql="SELECT f_name,l_name,user_image from user_table where user_name='$sender'";
        $senRow=pg_query($conn,$sql );
        $sendata=pg_fetch_row($senRow);
        $senFullname=$sendata[0]." ".$sendata[1];
        $class = "panel-warning text-capitalize";
        $imgs=$sendata[2];

        $sql="SELECT f_name,l_name,user_image from user_table where user_name='$receiver'";
        $recRow=pg_query($conn,$sql );
        $recdata=pg_fetch_row($recRow);
        $recFullname=$recdata[0]." ".$recdata[1];
        $recimg=$recdata[2];

        echo $stylel1 . $class . $stylel1_5 . $imgs . $stylel2 . "  " . $senFullname . "&nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;&nbsp;". $time." &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp".$recFullname.$styler2_1.$recimg.$styler2_5 .$stylel3 . $msg . $stylel4;

    }else {

        $sql="SELECT f_name,l_name,user_image from user_table where user_name='$receiver'";
        $recRow=pg_query($conn,$sql );
        $recdata=pg_fetch_row($recRow);
        $recFullname=$recdata[0]." ".$recdata[1];
        $recimg=$row[2];
        $sql="SELECT f_name,l_name,user_image from user_table where user_name='$sender'";
        $recRow=pg_query($conn,$sql );
        $recdata=pg_fetch_row($recRow);
        $senderName=$recdata[0]." ".$recdata[1];
        $img=$recdata[2];
        $class = "panel-info text-capitalize";
        echo $styler1 . $class . $styler1_5 . $img . $styler2 ."  ".$senderName."   &nbsp;&nbsp;&nbsp; at &nbsp;&nbsp;&nbsp;" . $time ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$styler3 . $msg . $styler4;
    }
}
?>