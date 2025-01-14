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



                                            <h4 class="modal-title" id="myModalLabel">add new product </h4>

                                        <div class="c">
                                            <?php require_once("create-product.php");?>
                                            <form class="form-horizontal" action="addproduct.php" method="POST">
                                                <div class="form-group">
                                                    <label for="username" class="cols-sm-2 control-label">	product_type</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="product_type" id="username"  placeholder="Enter your Username" equired=""/>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="cols-sm-2 control-label">product_code</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="product_code" id="username"  placeholder="Enter your Username" equired=""/>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="cols-sm-2 control-label">	product_name</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="product_name" id="email"  placeholder="Enter your Email" equired=""/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="city" class="cols-sm-2 control-label">product_description</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                           <textarea class="" style="width: 500px; height: 100px" name="product_description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                        <label>prdouct Image</label>
                                                        <div class="input-group">
                                                              <span class="input-group-btn">
                                                                  <span class="btn btn-default btn-file">
                                                                Browse… <input type="file" id="imgInp" name="imgInp">
                                                                         </span>
                                                                         </span>

                                                        </div>
                                                        <img id='img-upload'/>
                                                    </div>

                                                <div class="form-group">
                                                    <label for="phone" class="cols-sm-2 control-label">	price</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="price" id="phone"  placeholder="Enter your Phone" equired=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="cols-sm-2 control-label">	quantity</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">

                                                            <input type="text" class="form-control" name="quantity" id="phone"  placeholder="Enter your Password" equired=""/>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group " class="visible-xs">
                                                    <input type="submit" value="submit" name="submit">
                                                </div>

                                            </form>


                                        </div>


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
