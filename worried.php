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

<!-- Navigation -->

<div class="container-fluid" style="margin-top: 55px">
    <!-- Left Column -->
    <div class="col-sm-3">
        <?php include_once ("./php/index_leftside.php");?>
    </div><!--/Left Column-->
    <!-- center column-->
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-family: 'Ubuntu';font-size: x-large"; >
                Worried About someone?
            </div>
            <div class="panel-body" style="font-family: 'Ubuntu';font-size:large">
                <b>Worried about someone? Perhaps you have noticed that a friend, family member or student is stressed or anxious and you are worried about whether they are depressed or even suicidal? If this is the case there are steps you can take to help right now.</b><br><br>

                <ul>
                <li>Be clear about your limits</li>
                There are many ways in which you can offer helpful support to someone who may be depressed. However it is important that you are realistic about what you can’t do.
                <li>What you can do to help?</li>
                1. Communicate your concern: Isolation and lack of support are key factors in depression. Letting the person know you are worried could be a key first step in breaking that isolation.<br>
                2. Be both sensitive and persistent: Depression affects a person’s thinking patterns and sense of perspective. They may be unaware that they are affected or at risk. Don’t be surprised if their initial response is abrupt or rejecting. Do persevere in showing you care.<br>
                3.Get support for yourself: Remind yourself that you cannot take on responsibility for keeping another person safe or making them happy – that responsibility is ultimately theirs. Make sure you are properly supported. It can be extremely stressful living with or caring about a person affected by depression.<br><br>

                <b>"We want to remind people that if a friend says that life isn’t worth living, they should always be taken seriously."<br>
                -Catherine Johnstone, Former Samaritans CEO




            </div>
        </div>


       