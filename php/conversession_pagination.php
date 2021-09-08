<?php

include_once ("./db_connect.php");
$receiver=$_GET['r'];
$sql = "SELECT * FROM user_messages  where (receiver='$receiver' and   sender='$name')  or (receiver='$name' and   sender='$receiver') ORDER BY msg_time DESC ";

$result=pg_query($conn,$sql );
$num_rows=pg_num_rows($result);


$str1= '<nav>
            <ul class="pager">';
$str2='<li><a href="./conversession.php?r='.$receiver.'&page=';
$pageno;
$str3='">';
$str3_5='</a>';
$str4='</li>';
$str5='</ul>
        </nav>';
$stri1='<li><a href="./conversession.php?r='.$receiver.'&page=';
$pageno;
$stri2='" aria-label="Next">';
$stri2_5='" aria-label="Next">';
$stri3='<span aria-hidden="true">&laquo;</span></a>';
$stri3_5='<span aria-hidden="true">&raquo;</span></a>';

$each_page_size=10;
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