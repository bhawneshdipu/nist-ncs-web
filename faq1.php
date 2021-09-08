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
                Frequently Asked Qestions<br><br>
                Is it Confidential?
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                Counselling service is confidential, and we will not discuss anything about you outside of the Counselling and Wellbeing Team without your explicit agreement.
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                I'm not sure if I need counselling, what should I do?
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                Probably it's easiest to come to any of the Student Guides or our Counsellor Dr. Rita Mam. You can talk about any issues that you're not sure about, and also ask questions about how best to deal with any difficulties.
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                Is counselling guaranteed to make me feel better?
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                A counsellor will never offer to ‘cure’ you. A counsellor will help you understand your issues and provide a safe place where you can work through your feelings. Going through this process will help you to move forward. As you discuss your feelings and issues you may sometimes feel worse before you feel better – all sorts of emotions may surface that have been hidden.
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                What if I have further questions?
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                Please get in touch with us, and we'll do our best to help!
            </div>
        </div>
         


</div>