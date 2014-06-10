<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Administrator Website</title>
        <meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
        <meta name="author" content="Łukasz Holeczek">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?= assetsbackend_url() ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= assetsbackend_url() ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?= assetsbackend_url() ?>/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?= assetsbackend_url() ?>/css/style-responsive.css" rel="stylesheet">

        <!--[if lt IE 7 ]>
        <link id="ie-style" href="<?= assetsbackend_url() ?>/css/style-ie.css" rel="stylesheet">
        <![endif]-->
        <!--[if IE 8 ]>
        <link id="ie-style" href="<?= assetsbackend_url() ?>/css/style-ie.css" rel="stylesheet">
        <![endif]-->
        <!--[if IE 9 ]>
        <![endif]-->

        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?= assetsbackend_url() ?>/img/favicon.ico">
        <!-- end: Favicon -->




    </head>

    <body>
        <div id="overlay">
            <ul>
                <li class="li1"></li>
                <li class="li2"></li>
                <li class="li3"></li>
                <li class="li4"></li>
                <li class="li5"></li>
                <li class="li6"></li>
            </ul>
        </div>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" target="_blank" href="<?=base_url()?>"> <!--<img alt="Perfectum Dashboard" src="<?= assetsbackend_url() ?>/img/logo20.png" />-->
                        <span class="hidden-phone">My Apps</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="icon-user icon-white"></i>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('profile') ?>"><i class="icon-user"></i> My Account</a></li>
                                    <li><a href="<?= site_url('login/logout') ?>"><i class="icon-off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->
