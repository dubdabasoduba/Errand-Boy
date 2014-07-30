<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" http-equiv="CONTENT-TYPE" content="text/html">
    <title><?php echo $title;?></title>
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link href="<?php echo base_url(); ?>css/flat-ui.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link href="<?php echo base_url(); ?>css/prettify.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
    <link href="<?php echo base_url(); ?>css/bootstrap-docs.css" rel="stylesheet" type="text/css" media="screen"
          charset="utf-8">
    <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css" media="screen"
          charset="utf-8">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen"
          charset="utf-8">
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-collapse navbar-fixed-top" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Errand-Boy</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href='<?php echo base_url() . "user/"; ?>'><span class="glyphicon glyphicon-lock"></span> Sign In</a></li>
                <li><a href='<?php echo base_url() . "user/Signup"; ?>'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-info-sign"></span> FAQ<b class="caret"></b></a>
                    <span class="dropdown-arrow"></span>
                    <ul class="dropdown-menu">
                        <li><a href="#">Why use Errand-Boy?</a></li>
                        <li><a href="#">How to get An Errand-Boy?</a></li>
                        <li><a href="#">How to make an orders</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Contact Online Help</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
