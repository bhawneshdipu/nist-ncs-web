<?php
include_once ('db_connect.php');
error_reporting(E_ALL);
if(isset($_SESSION['user_id'])) {
    $id =addslashes( $_SESSION["user_id"]);
    $sql = " SELECT * from user_table WHERE user_id='$id';";
    $result = pg_query($conn, $sql) or die(pg_errormessage());
    $row = pg_fetch_array($result);
    if (pg_num_rows($result) == 1) {
        $fname = $row[1];
        $lname = $row[2];
        $name = $row[3];
        $email = $row[5];
        $nistid = $row[6];
        $branch = $row[7];
        $pin = $row[8];
        $mobile = $row[9];
        $account = $row[10];
        $gender = $row[11];
        $img = $row[12];
    } else {

        echo '<script> alert("SORRY NO ONE THERE... please login again ")</script>';
        header("Location: ./index.php");
    }
}else{
    header("Location: ./index.php");
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top navbar-static-top" role="navigation">


    <div class="container">
        <!-- Logo and responsive toggle -->


        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </button>
            <a class="navbar-brand nav navbar-nav navbar-left" href="./index.php"><img src="./images/nist.jpg" width="150px" height="35px"  vspace="0px" class="img-rounded" ></a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="./home.php"><b>Home</b></a>
                </li>
                <li>
                    <a href="./services.php"><b>Services</b></a>
                </li>

                <li>
                    <a href="./vision.php"><b>Vision</b></a>
                </li>
                <li>
                    <a href="./mission.php"><b>Mission</b></a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Gallery </b><span class="caret"></span></a>
                    <ul class=" nav navbar-nav navbar-inverse dropdown-menu " aria-labelledby="Gallery">
                        <li><a   href="./gallery.php"><b>Images</b></a></li>
                        <li><a   href="./videos.php"><b>Videos</b></a></li>
                    </ul>
                </li>
                <li>
                    <a href="./contact.php"><b>Contact</b></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">



                <li>
                    <img src="./profile/<?php echo $img ?>" class="img-circle" alt="" width="50px" height="50px">

                </li>
                <li>
                    <a href="./profile.php?p=<?php echo $name ;?>" >
                        <b><strong><?php echo $fname ." ".$lname;?></strong></b>
                    </a>
                </li>
                <li>
                    <a href="./account.php" >
                        <span class="glyphicon glyphicon-cog"></span>
                    </a>
                </li>
                <li>
                    <a href="./message.php"><span class="glyphicon glyphicon-envelope"></span> </a>
                </li>
                <li>

                    <a  href="./logout.php"> <b>Logout</b></a>

                </li>
            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
