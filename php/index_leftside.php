<div class="row">
    <div class="col-sm-12 col-md-12 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">
        <span href="./student_counselling_service.php" class=" list-group-item active">
            <span class="glyphicon glyphicon-apple"></span> NIST Councelling Service
            </span>
        </span>

            <a href="./about.php" class="list-group-item">
                About the Program
            </a>

            <a href="./aims.php" class="list-group-item">
                Aims and Objectives
            </a>
            <a href="./worried.php" class="list-group-item">
                Worried about someone
            </a>
            <a href="./problems.php" class="list-group-item">
                Common Problems
            </a>
            <a href="./confidentiality.php" class="list-group-item">
                Confidentiality
            </a>
            <a href="./faq.php" class="list-group-item">
                FAQ
            </a>
        </div>
    </div>
</div>


<!-- Text Panel -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"><span class="glyphicon glyphicon-apple"></span> Todays Thought</h1>
    </div>

    <div class="panel-body">
        <p><?php include_once ('./php/thought_fetch.php');?></p>

    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Notice Board
    </div>
    <div class="panel-body"  style="max-height: 150px ; overflow-y:scroll;">
        <marquee id="notice" direction="up" scrollamount="10" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();">
        <?php
                include_once ("./php/import_notice.php");
            ?></marquee>
    </div>
</div>