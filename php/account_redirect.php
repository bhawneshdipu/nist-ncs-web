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

    }else if($val[0]=='401'){
        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            extension not allowed, please choose a JPEG or PNG file
                      </div>';

    }else if($val[0]=='402'){
        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            File size must be excately 2 MB
                      </div>';

    }else if($val[0]=='403'){
        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                           Extension not  allowed, please choose a JPEG or PNG file and  File size must be less than 1 MB
                      </div>';

    }
    else if($val[0]=='1' ){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Profile  updated 
                      </div>';

    }else if($val[0]=='0' ){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                         Update Failed
                      </div>';

    }else if($val[0]=='success' ){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                         Update  Photo updated
                      </div>';

    }
?>