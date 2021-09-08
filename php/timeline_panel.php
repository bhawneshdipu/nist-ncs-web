<?php
date_default_timezone_set('Asia/Kolkata');
$class1='style="border: 1px solid #3ff;"';

$class2='style="border: 1px solid #fff;"';
$str1='<div class="message-item" ';
$class1;
$class2;
$str1_5='id="m16">
                    <div class="message-inner ">
                        <div class="message-head clearfix ">
                            <div class="avatar pull-left"><a href="';
$str2='#"><img src="./profile/';
$img;

$str3=' " width="35px" height="35px"></a></div>
                            <div class="user-detail">
                                <h5 class="handle text-capitalize">';
$fullname;
$str4='</h5>
                                <div class="post-meta">
                                    <div class="asker-meta">
                                        <span class="qa-message-what"></span>
											<span class="qa-message-when">
												<span class="qa-message-when-data">';
$time;
$str5='</span>
											</span>
											<span class="qa-message-who">
												<span class="qa-message-who-pad">by </span>
												<span class="qa-message-who-data"><a href="./profile.php?p=';
$name;
$str6='">';
$fullname;
$str7='</a></span>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="qa-message-content">';
$msg;

$str8='                        </div>
                    </div></div>';
$page=0;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
$limit=10;
$from=$page*10;
$sql = "SELECT * FROM user_timeline ORDER BY post_time DESC LIMIT $limit OFFSET $from";
$data = pg_query($conn,$sql);

while($row = pg_fetch_array($data)){
    $msg = $row['sender_post'];
    $time = $row['post_time'];
    $date=date_create($time);
    $time=date_format($date, 'g:ia \o\n l jS F Y');
    $username=$row[1];
    $sql1="SELECT f_name,l_name,user_image from user_table where user_name='$username'";
    $senRow=pg_query($conn,$sql1 );
    $sendata=pg_fetch_array($senRow);
    $fullname=$sendata[0]." ".$sendata[1];
    $img=$sendata[2];
    if($username==$name)
        echo $str1.$class1.$str1_5 . $str2 .$img.$str3.$fullname.$str4.$time.$str5.$username.$str6.$fullname.$str7.$msg.$str8;
    else
        echo $str1.$class2.$str1_5 . $str2 .$img.$str3.$fullname.$str4.$time.$str5.$username.$str6.$fullname.$str7.$msg.$str8;
}
?>