<?php
    $var=array_values($_GET);
    if($var==null){

    }else if($var[0]=='success'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Messages sent! 
                          </div>';
    }else if($var=='failed'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Messages not sent! 
                          </div>';

    }else if($var[0]=='empty'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                  Write something in message box
                          </div>';

    }
?>