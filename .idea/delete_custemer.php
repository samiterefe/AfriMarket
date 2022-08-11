<?php
session_start();
include_once("includes/connection.php");
if(!isset($_SESSION['id']['username'])){
   // header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>online-shopping  Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Online-Shopping</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Online-Shopping Admin</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Account <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Admin Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout(Admin)</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Catagories <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="computer.php" style="background-color: #f8f8f8;">Computers</a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #f8f8f8;">Moblies</a>
                            </li>
                            <li>
                                <a href="#" style="background-color: #f8f8f8;">Tabltes</a>
                            </li>



                        </ul>
                    </li>
                </ul>
                </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content and tebles that manges by admin -->
    <br><br><br>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="box">

                            <div class="modal-header" class="col-xs-1">

                                <h4 class="modal-title" id="myModalLabel">add new product </h4>
                            </div>
                            <div class="modal-body">

                                <form class="form-horizontal" action="addproduct.php" method="POST">
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">	Title</label>
                                        <div class="cols-sm-10">
                                            <table class="table responsive-table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Full-Name</th>
                                                    <th>User-name</th>
                                                    <th>Email</th>
                                                    <th> Region</th>
                                                    <th>City</th>
                                                    <th>House_number</th>
                                                    <th>phone</th>
                                                    <th>password</th>
                                                    <th>previllage</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td><a href="remove_custemer.php"> remove</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td><a href="remove_custemer.php"> remove</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Jill</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td>Smith</td>
                                                    <td>50</td>
                                                    <td><a href="remove_custemer.php"> remove</a></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div><!-- /.col-lg-6 -->

                            <!-- .col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="box">
                                    <header>
                                        <h3>Table Striped</h3>
                                        <div class="toolbar">
                                            <div class="btn-group">
                                                <a href="#defaultTable" data-toggle="collapse" class="btn btn-sm btn-default minimize-box">
                                                    <i class="fa fa-angle-up"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm close-box">
                                                    <i class="fa fa-times"></i>
                                                </a>&nbsp;&nbsp;
                                                <a class="btn btn-primary btn-sm ">
                                                    Insert
                                                </a>&nbsp;
                                                <a class="btn btn-primary btn-sm ">
                                                    Delete
                                                </a>&nbsp;
                                                <a class="btn btn-primary btn-sm ">
                                                    Update
                                                </a>
                                            </div>
                                        </div>
                                    </header>
                                    <div id="stripedTable" class="body collapse in">

                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>


            </div><!-- /.inner -->
        </div><!-- /.outer -->
    </div><!-- /#content -->
</div>
</div>

<!-- ... Your content goes here ... -->

</div>
</div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
