<?php
ob_start();
echo '
<div class="row">
    <div class="col-sm-12 col-md-12 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">
        <span href="./student_counselling_service.php" class=" list-group-item active">
            <span class="glyphicon glyphicon-cog"></span> Admin Panel
            </span>
            </span>

            <a href="./student_search.php" class="list-group-item">
                Student Search
            </a>

            <a href="./guide_detail.php" class="list-group-item">
                Guide Details
            </a>
            <a href="./slide_show.php" class="list-group-item">
                Slide Show
            </a>
            <a href="./album.php" class="list-group-item">
                Album Detail
            </a>
            <a href="./images.php" class="list-group-item">
                Images
            </a>
            
            <a href="./videos.php" class="list-group-item">
                Videos
            </a>
             <a href="./thoughts.php" class="list-group-item">
                Thoughts Details
            </a>
            <a href="./show_admin.php" class="list-group-item">
                Admin Detail
            </a>
            <a href="./review_detail.php" class="list-group-item">
                Review Detail
            </a>
            <a href="./notice_detail.php" class="list-group-item">
                Notice Detail
            </a>' .
    '
            <a href="./message_detail.php" class="list-group-item">
                Messages Details
            </a>
            <a href="./post_detail.php" class="list-group-item">
                Post Details
            </a>
        </div>
    </div>
</div>';?>