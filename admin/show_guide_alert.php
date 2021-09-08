<?php

$var=array_values($_GET);
if($var==null){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Welcome Admin 
                          </div>';

}else if($var[0]=='edited'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        User Edited
                          </div>';
}else if($var[0]=='added'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        User Added 
                          </div>';

}else if($var[0]=='add failed'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Add Failed
                          </div>';

}else if($var[0]=='edit failed'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        User Edit Failed
                          </div>';

}
?>