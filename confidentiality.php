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
        <div class="panel panel-primary">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                Confidentiality
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                According to Journal of Professional School Counseling:<br><br>
                “Confidentiality is a professional’s promise or contract to respect clients’ privacy by not disclosing anything revealed during counseling, except under agreed upon conditions.”<br><br>
                The counselling service is confidential. We will not discuss anything about you outside of the NIST Student Counselling Service without your explicit agreement, except in exceptional circumstances. For example, we would have a duty to inform your family if we were concerned that there was a serious risk of harm to yourself or others.<br><br>
                The service also stores basic information about each student on a secure and confidential database, which is also kept separate to any other student record system. This information is used to compile aggregate data and monitor the service as a whole. No information that can be traced back to individuals will be released by the counselling service.

            </div>
        </div>


       