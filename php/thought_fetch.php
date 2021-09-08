<?php
    include_once ("./db_connect.php");
    $sql='select count(*) from thought_table';
    $result=pg_query($conn,$sql);
    $row=pg_fetch_row($result);
    $mod=$row[0];
    date_default_timezone_set("Asia/Kolkata");
    $day=date("d");
    $off=$day % $mod;
    $sql='select * from thought_table order by thought_id limit 1 offset '.$off.'';
    $result=pg_query($conn,$sql);
    if(pg_num_rows($result)>0) {
        $row = pg_fetch_row($result);
        echo '"'.$row[1].'"<p>-'.$row[2].'</p>';
    }else{
        echo 'An Apple a day keeps the doctor away<p>-dipu</p>';
    }
?>