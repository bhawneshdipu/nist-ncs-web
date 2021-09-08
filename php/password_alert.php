<?php
$var=array_values($_GET);
if($var==null){

}else if($var[0]=='success'){

    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Password Changed 
                          </div>';
}else if($var[0]=='failed'){

    echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Password not Changed,Sorry for inconvenience! 
                          </div>';
}else if($var[0]=='error'){

    echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        password not matched 
                          </div>';
}else if($var[0]=='notfound'){

    echo'<div class="alert alert-block alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Sorry for inconvenience! 
                          </div>';
}
?>