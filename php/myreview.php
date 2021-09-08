<?php
include_once ("./db_connect.php");

if($guideid=='0')
    $sql="select * from review_table";
else
    $sql="select * from review_table where review_user_id='$id'";

$result=pg_query($conn,$sql);
date_default_timezone_set('Asia/Kolkata');
if(pg_num_rows($result)>0) {
    while ($row = pg_fetch_row($result)) {

        $id = $row[0];
        $title = $row[1];
        $date = date_create($row[2]);
        $time = date_format($date, 'g:ia \o\n l jS F Y');

        $body = $row[3];
        $master = $row[5];
        $mrks=$row[4];
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
        </div></div >';

        echo $str1;


    }
}else{

    echo '<form action="./myreviews.php" class="form-group" method="post">
        <div class="panel panel-default">
            <div class="panel-heading text-danger" >
                <input type="text" required class="btn btn-default  pull-left" id="review_title" name="review_title" placeholder="Title">
                <a role="button" class="btn btn-info pull-right">'; ?><?php date_default_timezone_set('Asia/Kolkata');
    $date = date_create();
    $time = date_format($date, 'g:ia \o\n l jS F Y');
    echo $time;
    echo ' </a><br>
            </div>
            <div class="panel-body " style="font-family: \'Ubuntu\';font-size:medium;" >
                <textarea required rows="5" id="review_msg" name="review_msg" placeholder="Review" class="form-control"></textarea>
                 <div class="form-group  pull-right">
                        <label class="col-xs-4 control-label">Marks</label>
                        <div class="col-xs-8 selectContainer">
                            <select required name="review_marks"  id="review_marks" class="form-control" >
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                        </div>
                    </div>
            </div>
            <div class="panel-footer " style="font-size=medium"><a role="button" class="btn btn-primary pull-left">'.$name.'</a>
           
                   
      <input type="submit" value="Post"  class="btn btn-danger  btn-default pull-right col-lg-2" id="post_review" name="post_review" ><br>
            </div></div></form>';


}