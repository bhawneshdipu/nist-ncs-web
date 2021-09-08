<?php

if(isset($_GET['m'])) {
    $var = $_GET['m'];

    if ($var == null) {
        echo '<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                        Welcome Admin 
                          </div>';

    } else if ($var == 'deleted') {
        echo '<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                 Review Deleted!
                          </div>';
    } else if ($var == 'failed') {

        echo '<div class="alert alert-block alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Message!</h4>
                      Review Delete Failed!
                          </div>';

    }
}
?>