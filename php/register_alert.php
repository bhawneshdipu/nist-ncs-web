<?php
    $var=array_values($_GET);
    if($var==null){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                           Please fill the Registration form! 
                      </div>';

    }else if($var[0]=='0'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Registered successfully , Please Login 
                      </div>';

    }else if($var[0]=='1'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                           Failed to register ,Please try again 
                      </div>';

    }else if($var[0]=='2'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            MOBILE already exists! please choose another 
                      </div>';
    }else if($var[0]=='3'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            Rollno already exists! please choose another 
                      </div>';

    }else if($var[0]=='4'){
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            EMAIL already exists! please choose another 
                      </div>';

    }else if($var[0]=='5'){

        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                            USERNAME already exists! please choose another 
                      </div>';
    }else{
        echo'<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                           Please fill the Registration form 
                      </div>';

    }