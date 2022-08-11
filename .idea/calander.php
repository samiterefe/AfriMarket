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
                    <a href="calander.php" class="active"><i ></i>
                        <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Calander</a>
                </li>
                <li>
                    <a href="cloths.php"><i class="fa fa-sitemap fa-fw"></i> Tables<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="cloths.php" style="background-color: #f8f8f8;">Custmers</a>
                        </li>
                        <li>
                            <a href="cloths.php" style="background-color: #f8f8f8;">Catagories</a>
                        </li>
                        <li>
                            <a href="cloths.php" style="background-color: #f8f8f8;">products</a>
                        </li>
                        <li>
                            <a href="Electronics.php"style="background-color: #f8f8f8;">advertisement</a>
                        </li>
                        <li>
                            <a href="Electronics.php"style="background-color: #f8f8f8;">Order_Items</a>
                        </li>
                        <li>
                            <a href="Electronics.php"style="background-color: #f8f8f8;">Electronics</a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #f8f8f8;"> <span class="fa arrow"></span></a>

                    </ul>

            </ul>
            </li>

            </ul>

        </div>
    </div>
</nav>

<!-- Page Content and tebles that manges by admin -->
<br><br>
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="col-lg-6">
        <div class="box">
            <header>

                <div class="money">
                    <h3>Calendar</h3>





                    <script LANGUAGE="JavaScript">
                        monthnames = new Array("January","Februrary","March","April","May","June","July","August","September","October","November","Decemeber");
                        var linkcount=0;
                        function addlink(month, day, href) {
                            var entry = new Array(3);
                            entry[0] = month;
                            entry[1] = day;
                            entry[2] = href;
                            this[linkcount++] = entry;
                        }
                        Array.prototype.addlink = addlink;
                        linkdays = new Array();
                        monthdays = new Array(12);
                        monthdays[0]=31;
                        monthdays[1]=28;
                        monthdays[2]=31;
                        monthdays[3]=30;
                        monthdays[4]=31;
                        monthdays[5]=30;
                        monthdays[6]=31;
                        monthdays[7]=31;
                        monthdays[8]=30;
                        monthdays[9]=31;
                        monthdays[10]=30;
                        monthdays[11]=31;
                        todayDate=new Date();
                        thisday=todayDate.getDay();
                        thismonth=todayDate.getMonth();
                        thisdate=todayDate.getDate();
                        thisyear=todayDate.getYear();
                        thisyear = thisyear % 100;
                        thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
                        if (((thisyear % 4 == 0)
                            && !(thisyear % 100 == 0))
                            ||(thisyear % 400 == 0)) monthdays[1]++;
                        startspaces=thisdate;
                        while (startspaces > 7) startspaces-=7;
                        startspaces = thisday - startspaces + 1;
                        if (startspaces < 0) startspaces+=7;
                        document.write("<table border=0 bgcolor=white width=220 height=200");
                        document.write("bordercolor=black><font color=black>");
                        document.write("<tr><td colspan=7><center><strong>"
                            + monthnames[thismonth] + " " + thisyear
                            + "</strong></center></font></td></tr>");
                        document.write("<tr>");
                        document.write("<td align=center>Su</td>");
                        document.write("<td align=center>M</td>");
                        document.write("<td align=center>Tu</td>");
                        document.write("<td align=center>W</td>");
                        document.write("<td align=center>Th</td>");
                        document.write("<td align=center>F</td>");
                        document.write("<td align=center>Sa</td>");
                        document.write("</tr>");
                        document.write("<tr>");
                        for (s=0;s<startspaces;s++) {
                            document.write("<td> </td>");
                        }
                        count=1;
                        while (count <= monthdays[thismonth]) {
                            for (b = startspaces;b<7;b++) {
                                linktrue=false;
                                document.write("<td>");
                                for (c=0;c<linkdays.length;c++) {
                                    if (linkdays[c] != null) {
                                        if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
                                            document.write("<a href=\"" + linkdays[c][2] + "\">");
                                            linktrue=true;
                                        }
                                    }
                                }
                                if (count==thisdate) {
                                    document.write("<font color='FF0000'><strong>");
                                }
                                if (count <= monthdays[thismonth]) {
                                    document.write(count);
                                }
                                else {
                                    document.write(" ");
                                }
                                if (count==thisdate) {
                                    document.write("</strong></font>");
                                }
                                if (linktrue)
                                    document.write("</a>");
                                document.write("</td>");
                                count++;
                            }
                            document.write("</tr>");
                            document.write("<tr>");
                            startspaces=0;
                        }
                        document.write("</table></p>");
                    </script>







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
