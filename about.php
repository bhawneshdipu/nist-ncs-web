<?php include_once ("./php/session_start.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nist Councelling Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">

</head>

<body>


<!-- Navigation -->
<?php if(($_SESSION['user_id'])>0)
    include_once ("./php/navbar_home.php");
else
    include_once ("./php/navbar_index.php");
?>

<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->
    <!-- center column-->
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                About the Program
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                Counseling is a blissful and pragmatic service that we intend to provide to the young minds which nourishes them to adapt to the circumambience of our institution. Our team does not believe in going for a quest of problems rather we believe in creating a learning environment which satisfies the purpose of being in the institution.<br><br>

                Every student guide with a faculty advisor handles a bunch of students which meets regularly and ensures that every student overcomes the challenges and is working smoothly both in academics and extra-curricular activities. Student guide analyses each student and focuses in all round development and spreading awareness about the opportunities rendered by the college in their field of expertise. 
                <br><br>
                Along with head Counselor and Faculty Advisors, Student counseling services comprises of a team of students including experienced students from 4th and 3thyear to assist students and guide them.<br><br>


                <b>“We’re here for a reason. I believe a bit of the reason is to throw little torches out to lead people through the dark.”
                    <br>-Whoopi Goldberg<b>



            </div>
        </div>


       