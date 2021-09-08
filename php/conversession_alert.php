<?php
$var=array_values($_GET);
if($var==null){

}else if(!isset($var[1])){
    if($var[0]=='success'){

    }else if($var[0]=='failed'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Messages not sent! 
                          </div>';

    }else if($var[0]=='empty'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                  Write something in message box and Select a receiver on right side
                          </div>';

    }else{
			echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Send Message to '.$var[0].'
                          </div>';

    }


}else if($var[0]=='success'){
    echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Message sent to '.$var[1].'! 
                          </div>';
}else if($var[0]=='failed'){
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