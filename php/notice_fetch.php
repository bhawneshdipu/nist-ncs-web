<?php
include_once ("./db_connect.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else
        $page=0;
$limit=5;
$from=$page*5;

    $sql="select * from notice_table where (guide_id='$guideid' or guide_id='0' ) ORDER  BY notice_date  DESC  LIMIT $limit OFFSET $from ";
    $result=pg_query($conn,$sql);
date_default_timezone_set('Asia/Kolkata');
   while($row=pg_fetch_row($result)) {

       $id = $row[0];
       $title = $row[1];
       $subtitle = $row[2];
       $date=date_create($row[3]);
       $time=date_format($date, 'g:ia \o\n l jS F Y');

       $body = substr($row[4], 0, 100);
       $master = $row[5];


       $str1 = '<div class="panel panel-default">
            <div class="panel-heading text-danger" >'
            .'<a role="button" class="btn btn-primary pull-left">'.$title.'</a>
                <a role="button" class="btn btn-info pull-right">'.$time.'</a><br>
                </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" ><a role="button" class="btn btn-success ">' . $subtitle . '</a><hr> ' . $body . '
            
            </div>
            <div class="panel-footer " style="font-size=medium"><a role="button" class="btn btn-primary pull-left">'.$master.'</a>
                <a role="button" href="./notice_view.php?notice_id='.$id.'"  target ="_blank" class="btn btn-info pull-right">View</a><br>
        </div></div>';

       echo $str1;


   }