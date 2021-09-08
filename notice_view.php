<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php
include_once ("./db_connect.php");
$noticeid=$_GET['notice_id'];
$sql="select * from notice_table where notice_id='$noticeid' ";
$result=pg_query($conn,$sql);
date_default_timezone_set('Asia/Kolkata');
while($row=pg_fetch_row($result)) {

$id = $row[0];
$title = $row[1];
$subtitle = $row[2];
$date=date_create($row[3]);
$time=date_format($date, 'g:ia \o\n l jS F Y');

$body = $row[4];
$master = $row[5];


$str1 = '<div class="panel panel-default">
    <div class="panel-heading text-danger" ><center style="font-size: xx-large" class="text-primary">Notice</center>
        <a role="button" class="btn btn-primary pull-left col-xs-3">'.$title.'</a>
        <a role="button" class="btn btn-info pull-right">'.$time.'</a><br>
    </div>
    <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" > <center class="text-success">' .$subtitle . '</center><hr> <center>' . $body . '</center>

    </div>
    <div class="panel-footer " style="font-size=medium">&nbsp    <a role="button" class="btn btn-primary btn-lg col-xs-2 pull-right">'.$master.'
    </div></div>';

echo $str1;


}
?>