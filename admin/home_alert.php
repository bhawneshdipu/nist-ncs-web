<?php

$var=array_values($_GET);
if($var==null){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Welcome Admin 
                          </div>';

}else if($var[0]=='deleted'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        User Deleted
                          </div>';
}else if($var[0]=='success'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        User Edited 
                          </div>';

}
?>