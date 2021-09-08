<?php
session_start();
include_once ('db_connect.php');
error_reporting(E_ALL);
$id=$_SESSION["admin_id"];
echo $id."id";
$sql=" SELECT * from admin_table WHERE admin_id='$id';" ;
$result = pg_query($conn,$sql) or die(pg_errormessage($conn)) ;
$row=pg_fetch_array($result);
if(pg_num_rows($result)==1) {

    $name = $row[1];
    $email = $row[3];
    $mobile = $row[4];
}else{

    echo '<script> alert("SORRY NO ONE THERE... please login again ")</script>';
    //header("Location: ./index.php");
}
?>
<nav class="nav navbar navbar-inverse navbar-fixed-top " role="navigation">


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
            <a class="navbar-brand nav navbar-nav navbar-left" href="./index.php"><img src="./../images/nist.jpg" width="150px" height="35px"  vspace="0px" class="img-circle" ></a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="./home.php"><b>Home</b></a>
                </li>
                <li >
                    <a href="./student_search.php"><b>Student Search</b></a>
                </li>
                <li >
                    <a href="./guide_detail.php"><b>Guide Detail</b></a>
                </li>
                <li >
                    <a href="./show_admin.php"><b>Admin Detail</b></a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right pull-right">


                <li >

                    <a><b><strong><?php echo $name ;?></strong></b></a>

                </li>

                <li >

                    <a><b><strong><?php echo $email ;?></strong></b></a>

                </li>

                <li >

                    <a><b><strong><?php echo $mobile ;?></strong></b></a>

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