<?php
    $val=array_values($_GET);
    if($val==null){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Edit Account Details
                      </div>';

    }else if($val[0]=='404'){
        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Password Incorrect
                      </div>';

    }
    else if($val[0]=='1' and $val[1]=='1'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Profile  updated 
                      </div>';

    }else if($val[0]=='0' and $val[1]=='1'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Image  updated 
                      </div>';

    }else if($val[0]=='1' and $val[1]=='0'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Profile  updated 
                      </div>';

    }else if($val[0]=='0' and $val[1]=='0'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Update Failed
                      </div>';

    }
?>