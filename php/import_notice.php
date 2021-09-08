<?php
    include_once ("./db_connect.php");
    $sql='select * from notice_table ';
    $result=pg_query($conn,$sql);

    while($row=pg_fetch_row($result)) {
        $id = $row[0];
        $title = $row[1];
        $subtitle = $row[2];
        $date = $row[3];
        $body = substr($row[4],0,100 );
        $master = $row[5];


        $str1='<div class="panel panel-default">
            <div class="panel-heading" style="font-family: \'Ubuntu\';font-size:smaller"; >'.
                $title.'<br>
                  <a style="font-size=small">'.$subtitle.'</a>
                </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:small">'.$body.'...
            '.'<a role="button" href="./notice_view.php?notice_id='.$id.'"  target ="_blank" class="btn btn-sm btn-info pull-right">View</a>
            </div>
            <div class="panel-footer" style="font-size=medium">'.$master.'</div>'.'</div>';

        echo $str1;
    }

?>