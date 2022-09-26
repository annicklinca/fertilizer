<?php
include '../connection.php';
include 'admin_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
     <title>FertiDistribution.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Ferti Distribute</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="color: #20aee3;font-weight: bold;">
                    FertiDistri </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                          <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down"><?php echo $admin_firstname."&nbsp".$admin_lastname;  ?></span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                          <li> <a class="waves-effect waves-dark" href="addfertilizer.php" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Fertilizer</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="requests.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Requests</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="message.php" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Messages</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="farmers.php" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Retailers</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="stockin.php" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Stockin</span></a>
                        </li>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="../signout.php" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu">Logout</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>