<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");
$_SESSION['pro_id']="";
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Online Shopping Systems</title>
    <link rel="stylesheet" href="validation/css/validationEngine.jquery.css" type="text/css"/>
    <script src="validation/js/jquery-1.6.min.js" type="text/javascript">
    </script>
    <script src="validation/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
    <script>
        jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#formID").validationEngine('attach');
        });
    </script>
    <link rel="shortcut icon" HREF="images/cart.gif" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="css/etalage.css">


    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="ee/js/jqueryy.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->

    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.message').fadeOut('slow', function(c){
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close1').on('click', function(c){
                $('.message1').fadeOut('slow', function(c){
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close2').on('click', function(c){
                $('.message2').fadeOut('slow', function(c){
                    $('.message2').remove();
                });
            });
        });
    </script>


    <script src="js/jquery.etalage.min.js"></script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>



    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <script type="text/javascript" src="js/boxOver.js"></script>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>


</head>



<body>
<!--header-->
<div class="container">

<div class="header-top">
    <div class="logo">
        <img src="images/ware.jpg" alt="" >
    </div>
    <div class="header-top-on">
        <ul class="social-in">


            <li><a href="https://www.facebook.com"><img src="images/f.png"></a></li>
            <li><a href="https://www.google.com"><img src="images/g.png"></a></li>
            <li><a href="https://www.twitter.com"><img src="images/t.png"></a></li>
            <li><a href="https://www.youtube.com"><img src="images/you.png"></a></li>
            <li><a href="https://www.yahoo.com"><img src="images/ya.png"></a></li>




        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <div class="top-nav">

        <ul class="megamenu skyblue">
            <li class="active grid"><a  href="update_product.php">Home</a></li>



            <li class="grid"><a  href="warehouse_view_order.php">View Orders</a> </li>

            <li class="grid"><a  href="warehouse_profile.php">Profile</a> </li>
            <li class="grid"><a  href="logout.php">Logout</a> </li>


        </ul>

    </div>

    <div class="clearfix"> </div>
</div>
<div class="content">

<div class="col-md-9">


    <div class="modal-content">


        <div class="modal-header">

            <div class="modal-title"><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Update Product</h6></div>

        </div>


        <div class="modal-body">

            <?php
            $get_id = $_GET['id'];
            $_SESSION['pro_id']=$get_id;

//Connect to the server
$conn=mysqli_connect("localhost:3306","root","","final pro");
if($conn==true)
{
    echo "connection is successfull";
}
else{
    echo "connection is failed";
}
//connect to the database
//mysqli_select_db("placement") or die("dosn't find database");


            $sql="select * from products where product_code='$get_id'"or die(mysql_error());
            $query=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($query);

            ?>



            <!--  wrapper -->
            <div id="wrapper">



                <div class="aa">



                    <div class="panel-heading">




                        <form id="formID" class="formular" method="post" action="update_pro.php ">




                            <table border="0" width="100%">
                                <tr>
                                    <td><b>PRODUCT CODE:</b></td>
                                    <td>
                                        <input class="validate[required] text-input" readonly type="text" name="pc" id="fname" value="<?php echo $row['product_code']; ?>"  required /><br><br></th></tbody>

                                    </td>
                                </tr>

                                <tr>
                                    <td><b>PRODUCT NAME:</b></td>
                                    <td>
                                        <input class="validate[required,custom[onlyLetterSp]] text-input" onkeypress="return alpha(event,letters)" type="text" name="pn" id="fname" value="<?php echo $row['product_name']; ?>"  required /><br></th></tbody>

                                    </td>
                                </tr>

                                <tr>
                                    <td><b> PRICE:</b></td>
                                    <td>
                                        <input class="validate[required,custom[number]] text-input" onkeypress="return alpha(event,numbers)" type="text" name="p" id="fname" value="<?php echo $row['price']; ?>"  required /><br><br></th></tbody>

                                    </td>
                                </tr>

                                <tr>
                                    <td><b>QUANTITY:</b></td>
                                    <td>
                                        <input  class="validate[required,custom[number]] text-input" onkeypress="return alpha(event,numbers)" type="text" name="q" id="integer" value="<?php echo $row['quantity']; ?>"   required /><br><br></th></tbody>

                                    </td>
                                </tr>




                            </table>



                            <br> 	<br>		<br>
                            <div class="modal-footer">
                                <input type="submit" name="submit" value="Update">
                                <input type="reset" value="Clear">

                            </div>


                        </form>

                    </div>





                </div>
            </div>







        </div>




    </div>






</div>

<div class="col-md-3 col-md">
    <div class=" possible-about">
        <h4>Ware House Tasks</h4>


        <div class="tab3">

            <ul class="place">
                <a href="update_product.php">
                    <li class="sort"><span>Manage Product</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>
        </div>



        <div class="tab2">
            <ul class="place">
                <a href="advert.php">
                    <li class="sort"><span>Product Advertisement</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>

        </div>
        <div class="tab4">
            <ul class="place">
                <a href="warehouse_change_password.php">
                    <li class="sort"><span>Change Password</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>

        </div>

        <div class="tab4">
            <ul class="place">
                <a href="chan_uname.php">
                    <li class="sort"><span>Change User Name</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>

        </div>

        <div class="tab4">
            <ul class="place">
                <a href="cha_warepro.php">
                    <li class="sort"><span>Change Profile Image</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>

        </div>

        <div class="tab5">

            <ul class="place">
                <a href="ware_update.php">
                    <li class="sort"><span>Update Profile</span></li>
                </a>
                <div class="clearfix"> </div>
            </ul>

        </div>


    </div>

    <!---->
    <div class="money">
        <br>
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
<div class="clearfix"> </div>
</div>
<!---->



<div class="footer">
    <p class="footer-class"><h4 style="color:black; font-family:times new roman;">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 2016 Info systems All Rights Reserved | designed by IS students Haramaya University</h4> </p>


    <div class="clearfix"> </div>
</div>
</div>
</div>
<!---->



<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/image_slide.js"></script>

<script type="text/javascript">
    <!--
    var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
    var numbers='1234567890'
    var signs=',.:;@-\''
    var mathsigns='+-=()*/'
    var custom='<>#$%&?¿'

    function alpha(e,allow) {
        var k;
        k=document.all?parseInt(e.keyCode): parseInt(e.which);
        return (allow.indexOf(String.fromCharCode(k))!=-1);
        alert('letter only');
    }

    // -->
</script>



</body>
</html>