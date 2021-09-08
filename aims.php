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
<?php if(isset($_SESSION['user_id']))
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
                Aims and Objectives
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                The primary purpose of the Student Counselling Service is to provide a free confidential professional counselling service to all matriculated Edinburgh University students.
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                The Student Counselling Service
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                We offer short-term counselling and other evidence-based mental health support options such as self help resources and group events.We follow our own Code of Practice on Confidentiality and Data Protection detailing the nature and limits of confidentiality provided by us.
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                Support for students
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                The secondary objective of the Student Counselling Service is to enhance and encourage the emotional well-being and mental health of students of NIST and those who support them. The Service seeks to reach this objective by:<br>
                    1. Facilitating personal development presentation/workshops for students.<br>
                    2. Offering advice and support to academic staff concerned for the mental and emotional well-being of their students.
            </div>
        </div>
    </div>




</div>