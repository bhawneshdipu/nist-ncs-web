
<div class="container-fluid col-xs-12 ">
    <!-- Text Panel -->
    <div class="container-fluid col-xs-12 pre-scrollable " style="max-height: 500px ;overflow-y: scroll" >
        <a class="container-fluid well well-sm col-xs-12" href="#"><img src="./profile/profile.jpg" class="img-circle" width="25px" height="25px"> Chat </a>
    <?php
        $str0='<a class="container-fluid col-xs-12" role="button" href="./message.php?r=';
    $val;
    $str1='"><button class="container-fluid  btn btn-default btn-sm col-xs-12 btn-group-justified" style="white-space: normal;"  value="';
    $val;
    $str2='"><img src="./profile/';
    $img;
    $str3='"  class="container-fluid col-xs-3  img-circle" width="25px" height="25px" ><p class="text-capitalize col-xs-8 ';
    $cls1='text-primary" ';
    $cls2='text-success" ';
    $cls3='text-danger';
    $cls4='text-warning';

    $str4='">';

                $fullname=$fname."  ".$lname;
                $str5='</p>';
                //$str6='<span class="glyphicon glyphicon-asterisk col-xs-2 text-success"></span>'; for online purpose not implemented yet
                $str7='</button></a>';
        if($guideid!='0') {
        $sql = "SELECT * from user_table WHERE  (guide_id='$guideid' or guide_id='0') ORDER  BY user_priority DESC ";
        }else{
        $sql = "SELECT * from user_table WHERE  1=1 ORDER  BY user_priority DESC ";
        }
        $result=pg_query($conn,$sql );
        while($row=pg_fetch_row($result)){
        $fullname=$row[1]." ".$row[2];
        $val=$row[3];
            $img=$row[12];
        $viewuser=$row[3];
            if($row[3]!=$name  ) {
                if ($row[14] == "9")
                    echo $str0 . $val . $str1 . $val . $str2 . $img . $str3 . $cls3 . $str4 . $fullname . $str5 . $str7;
                else if ($row[14] == "6")
                    echo $str0 . $val . $str1 . $val . $str2 . $img . $str3 . $cls4 . $str4 . $fullname . $str5 . $str7;
                else if ($row[14] == "3")
                    echo $str0 . $val . $str1 . $val . $str2 . $img . $str3 . $cls2 . $str4 . $fullname . $str5 . $str7;
                else {
                    echo $str0 . $val . $str1 . $val . $str2 . $img . $str3 . $cls1 . $str4 . $fullname . $str5 . $str7;
                }


            }


        }



        ?>

    </div>
