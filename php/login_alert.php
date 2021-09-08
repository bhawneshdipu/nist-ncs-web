<?php
    $var=array_values($_GET);
    if($var==null){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Please Login ! 
                          </div>';

    }else if($var[0]=='404'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Details not matched, Please try again
                          </div>';
    }else{

        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Please Login ! 
                          </div>';

    }
?>