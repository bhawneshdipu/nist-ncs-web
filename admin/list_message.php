<?php
include_once ("./db_connect.php");
if(isset($_GET['page']))
    $page=$_GET['page'];
else
    $page=0;

$from=$page*15;
$limit=15;
$sql="SELECT * FROM user_messages ORDER BY msg_time DESC LIMIT $limit offset $from";
$result=pg_query($conn,$sql );
echo '   <row>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-xs-1">Message ID</th>
                    <th  class="col-xs-2" >Message Sender</th>
                    <th class="col-xs-2" >Message Receiver</th>
                    <th class="col-xs-4" >Message</th>
                    <th class="col-xs-3" >Time</th>
                    
                </tr>
            </thead><tbody>';
    while($row=pg_fetch_row($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';

    echo '<td>'.$row[3].'</td>';
    echo '<td>'.$row[4].'</td>';

    echo '</tr>';
}

echo '</tr> </tbody></table></row>';

$sql="select * from user_messages where 1=1";
$result=pg_query($conn,$sql );
$num_rows=ceil(pg_num_rows($result));
$str1= '<nav>
            <ul class="pager">';
$str2='<li><a href="./message_detail.php?page=';
$pageno;
$str3='">';
$str3_5='</a>';
$str4='</li>';
$str5='</ul>
        </nav>';
$stri1='<li><a href="./message_detail.php?page=';
$pageno;
$stri2='" aria-label="Next">';
$stri2_5='" aria-label="Next">';
$stri3='<span aria-hidden="true">&laquo;</span></a>';
$stri3_5='<span aria-hidden="true">&raquo;</span></a>';

$each_page_size=15;
$total_pages=ceil($num_rows/$each_page_size);
/*echo $num_rows."numrows";
echo $total_pages."total_pages";*/
echo $str1;
for($i=0;$i<$total_pages;$i++){
    if($i==0) {
        echo $stri1.$i.$stri2.$stri3.$str4;
    }else if($i>0 and $i+1<$total_pages){
        echo $str2 . $i . $str3 . $i . $str3_5 . $str4;
    }else{
        echo $stri1.$i.$stri2_5.$stri3_5.$str4;
    }
}
echo $str5;
?>