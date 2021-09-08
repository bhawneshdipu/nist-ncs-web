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
                Common Problems
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                One may feel these issues that are mentioned below:<br><br>
                <ul>
                <li>Stress</li><br>
                <li>Anxiety</li><br>
                <li>Depression</li><br>
                <li>Low Self Esteem</li><br>
                <li>Depression</li><br>
                <li>Eating Disorders</li><br>
                <li>Sleep</li> <br>
                <li>Perfectionism</li></ul>
                <br>
                <br>
                Some of the difficulties that students often raise include:<br><br>
                <ul>
                <li>Problems with anxiety and stress.</li><br> 
                <li>social anxiety.</li><br>
                <li>Depression.</li><br>
                <li>Loneliness.</li><br>
                <li>Adjusting to a new culture.</li><br> 
                <li>Homesickness.</li><br>
                <li>Problems with family, friends or intimate relationships.</li><br>
                <li>Feeling suicidal.</li><br>
                <li>Eating disorders.</li>
            </ul>
            </div>
        </div>


       