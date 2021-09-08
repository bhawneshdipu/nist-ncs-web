<?php
    $var=array_values($_GET);
    if($var==null){

    }else if($var[0]=='welcome'){

        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Welcome 
                          </div>';
    }else if($var[0]=='success'){

        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Messages Posted!! 
                          </div>';
    }else if($var[0]=='empty'){

        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Please write something to post ! 
                          </div>';
    }else if($var[0]=='failed'){

        echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Message not posted for reason,Sorry for inconvenience! 
                          </div>';
    }
?>