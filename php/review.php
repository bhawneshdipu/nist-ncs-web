<?php
include_once ("./db_connect.php");
$sql="select * from review_table";

$result=pg_query($conn,$sql);
date_default_timezone_set('Asia/Kolkata');
if(pg_num_rows($result)>0) {
    while ($row = pg_fetch_row($result)) {

        $id = $row[0];
        $title = $row[1];
        $date = date_create($row[2]);
        $time = date_format($date, 'g:ia \o\n l jS F Y');
        $mrks=$row[4];
        $body = $row[3];
        $master = $row[5];
        $sql="select f_name,l_name from user_table where user_name='$master'";
        $res=pg_query($conn,$sql);
        $r=pg_fetch_row($res);
        $fnm=$r[0];
        $lnm=$r[1];


        $str1 = '<div class="panel panel-default">
            <div class="panel-heading text-danger" >'
            . '<a role="button" class="btn btn-primary col-xs-6 pull-left">' . 'Review ' . '</a>
                <a role="button" class="btn btn-info pull-right">' . $time . '</a><hr>
               <a role="button" class="btn btn-success col-xs-12">' . $title . '</a>
                  
                </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" ><hr> ' . $body . '
            
            </div>
            <div class="panel-footer " style="font-size=medium"><a role="button" class="btn btn-primary pull-left text-capitalize">' . $fnm.' '.$lnm . '</a>
                <a role="button" class="btn btn-primary pull-right text-capitalize">' .$mrks. '/10</a>
            
                <br>
        </div></div ><hr>';

        echo $str1;


    }
}












