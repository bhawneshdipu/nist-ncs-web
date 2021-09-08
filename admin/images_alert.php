<?php

$var=array_values($_GET);
if($var==null){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Welcome Admin 
                          </div>';

}else if($var[0]=='added'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                       Image Added 
                          </div>';

}else if($var[0]=='failed'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Image Add Failed
                          </div>';

}else if($var[0]=='deleted'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Image deleted
                          </div>';

}else if($var[0]=='delete failed'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Delete Failed
                          </div>';

}
?>