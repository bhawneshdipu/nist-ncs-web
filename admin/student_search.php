<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./../css/custom.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php include_once ("./navbar_home.php");?>
<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px">

    <div class="col-sm-3">
        <?php include_once ("./admin_home_left.php");?>
    </div>
    <div class="col-sm-9">
            <?php include_once ("./student_search_alert.php");?>




        <div class="row col-md-12    center-block">
                <form   id="student_search" action="./student_search.php" method="get">
                    <div class="form-group ">
                        <label class="col-xs-4 control-label ">Student Search</label>
                        <div class="col-xs-4 selectContainer">
                            <select required  name="student" id="student" class="form-control">
                        <option value=""></option>
                        <?php
                        $sql = "SELECT * from user_table WHERE  1=1 ORDER  BY guide_id,user_priority DESC ";

                    $result=pg_query($conn,$sql ) or die(pg_errormessage($conn));
                    while($row=pg_fetch_row($result)) {
                        $rname = $row[3];
                        $rlname = $row[2];
                        $rfname = $row[1];
                        $guide_id=$row[13];

                        $str1 = '<option value="';
                        $rname;
                        $str2='" class="text-capitalize " id="';
                        $selectid=$rname;
                        $str3='">';

                            echo $str1 .$rname .$str2.$rname.$str3.$guide_id.".". $rfname . " " . $rlname . "</option>";

                    }
                    ?>
                </select>
                            </div>
            <input  name="show" id="show" type="submit"  style="margin-right: 20px" class="btn btn-default btn-primary col-md-1 col-lg-1" value="Show" >


            <hr>
                        <br>
                        <br>


                        <div class="col-md-4">Student Search</div>
                        <div class="content col-md-8">
                            <input type="text" class="search" id="searchid" placeholder="Search for Student" />&nbsp; &nbsp; Ex:<b><i>Dipu,201316665,dipu@gmail.com...</i></b><br />
                            <div id="resultid"></div>
                        </div>





                </form>
        </div>
</div>

        <?php include_once ("./student_show_profile.php");?>
</div>
</div>

<footer class=" nav navbar-inverse  navbar-fixed-bottom">
    <div class="container">
        <a class=" center-block"><span class="glyphicon glyphicon-apple "> </span> Nist Student Councelling Group  </a>
    </div>
</footer>


<!-- jQuery -->
<script src="./../js/jquery-2.1.4.js"></script>
<script src="./mysearchjquery.js"></script>
<script src="./../js/bootstrap.min.js"></script>

</body>
</html>