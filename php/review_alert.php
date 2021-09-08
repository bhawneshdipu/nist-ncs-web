<?php
/**
 * Created by IntelliJ IDEA.
 * User: dipu
 * Date: 27/8/16
 * Time: 1:15 AM
 */
$var=array_values($_GET);
if($var==null){

}else if($var[0]=='success'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>message!</h4>
                        Review Posted! 
                          </div>';
}else if($var=='failed'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Review not Posted! 
                          </div>';

}else if($var[0]=='empty'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                  Write something in Notice box
                          </div>';

}
?>