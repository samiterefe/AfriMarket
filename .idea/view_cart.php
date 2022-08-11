<?php
session_start();
include_once("config.php");
$total="";
$list_tax="";
$grand_total="";
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<html>
<head>


    <title>Online Shopping Systems</title>



    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="style/style.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" HREF="images/cart.gif" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jqueryy.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!--//slider-script-->
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


    <link rel="stylesheet" href="css/etalage.css">
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

    <script type="text/javascript">
        function confirmdelete()
        {
            return confirm("Are you sure to Remove?");
        }
    </script>


    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <script type="text/javascript" src="js/boxOver.js"></script>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

</head>
<body>
<!--header-->
<div class="container">

<!---->
<div class="header-top">
    <div class="logo">
        <img src="images/logo.jpg" alt="" >
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
            <li class="active grid"><a  href="index.php">Home</a></li>
            <li class="active grid"><a  href="Products.php">Products</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="store.html">Accessories</a></li>
                                    <li><a href="store.html">Laptop</a></li>
                                    <li><a href="store.html">Desktop</a></li>
                                    <li><a href="store.html">Copy Machine</a></li>
                                    <li><a href="store.html">Printer</a></li>
                                    <li><a href="store.html">Mobile</a></li>
                                    <li><a href="store.html">Watch</a></li>
                                    <li><a href="store.html">Tablet</a></li>
                                    <li><a href="store.html">Cables</a></li>
                                    <li><a href="store.html">Projector</a></li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </li>

            <li class="grid"><a  href="#">Brands</a>
                <div class="megapanel">
                    <div class="row">


                        <div class="col1">
                            <div class="h_nav">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="store.html">Toshiba</a></li>
                                    <li><a href="store.html">Dell</a></li>
                                    <li><a href="store.html">Samsung</a></li>
                                    <li><a href="store.html">Sony</a></li>
                                    <li><a href="store.html">Asus</a></li>
                                    <li><a href="store.html">Nokia</a></li>
                                    <li><a href="store.html">Apple</a></li>
                                    <li><a href="store.html">Hiwawi</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li class="grid"><a  href="viewcart.php">Shopping Cart</a> </li>
            <li class="grid"><a  href="login.php">Login</a> </li>


        </ul>

    </div>

    <div class="clearfix"> </div>
</div>
<div class="content">

<div class="col-md-9">


    <!-- View Cart Box Start -->



    <div class="cart-view-table-back">
        <form method="post" action="cart_update.php">
            <table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Product Name</th><th>Product Price</th><th>Total Price</th><th>Remove Item</th></tr></thead>
                <tbody>
                <?php

                if(isset($_SESSION["cart_products"])) //check session var
                {
                    $total = 0; //set initial total value
                    $b = 0; //var for zebra stripe table
                    foreach ($_SESSION["cart_products"] as $cart_itm)
                    {
                        //set variables to use in content below
                        $product_name = $cart_itm["product_name"];
                        $product_qty = $cart_itm["product_qty"];
                        $product_price = $cart_itm["product_price"];
                        $product_code = $cart_itm["product_code"];

                        $subtotal = ($product_price * $product_qty); //calculate Price x Qty

                        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe
                        echo '<tr class="'.$bg_color.'">';
                        echo '<td>'.$product_name.'</td>';
                        echo '<td>'.$currency.$product_price.'</td>';
                        echo '<td>'.$currency.$subtotal.'</td>';


                        ?>
                        <td><a href="removecart.php?action=remove&code=<?php echo $product_code ?>" onclick="return confirmdelete();" class="button">Remove Item</a></td>
                        <?php
                        echo '</tr>';
                        $total = ($total + $subtotal); //add subtotal to total var
                    }

                    $grand_total = $total + $shipping_cost; //grand total including shipping cost
                    foreach($taxes as $key => $value){ //list and calculate all taxes in array
                        $tax_amount     = round($total * ($value / 100));
                        $tax_item[$key] = $tax_amount;
                        $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
                    }

                    $list_tax       = '';
                    foreach($tax_item as $key => $value){ //List all taxes
                        $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
                    }
                    $shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
                }
                else{

                    echo " <h1>You Cart Is Empty</h1> ";

                }

                ?>
                <tr><td colspan="5"><span style="float:right;text-align: right;">Product Price: $<?php echo $total; ?><br><?php echo $list_tax; ?>Total Price: $<?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
                <tr><td colspan="5"><a href="login.php" class="button">Order</a><a href="Products.php" class="button">Add More Items</a></td></tr>

                </tbody>
            </table>
            <input type="hidden" name="return_url" value="<?php
            $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            echo $current_url; ?>" />
        </form>
    </div>



    <!-- View Cart Box End -->





</div>


<div class="col-md-3 col-md">
    <div class=" possible-about">
        <h4>Products</h4>




        <div class="tab1">
            <ul class="place">
                <a href="laptop.php">
                    <li class="sort"><span>Laptop</span></li>
                    <li class="by"><img src="images/do.png" alt=""></li>
                </a>



                <div class="clearfix"> </div>
            </ul>

        </div>




        <div class="tab2">
            <ul class="place">
                <a href="desktop.php">
                    <li class="sort"><span>Desktop</span></li>
                    <li class="by"><img src="images/do.png" alt=""></li>
                </a>

                <div class="clearfix"> </div>
            </ul>
        </div>







        <div class="tab3">
            <ul class="place">
                <a href="printer.php">
                    <li class="sort"><span>Printer</span> </li>
                    <li class="by"><img src="images/do.png" alt=""></li>

                </a>

                <div class="clearfix"> </div>
            </ul>

        </div>
        <div class="tab4">
            <ul class="place">
                <a href="mobile.php">
                    <li class="sort"><span>Mobile</span> </li>
                    <li class="by"><img src="images/do.png" alt=""></li>

                </a>

                <div class="clearfix"> </div>
            </ul>

        </div>
        <div class="tab5">
            <ul class="place">
                <a href="copy machine.php">
                    <li class="sort"><span>Copy Machine</span> </li>
                    <li class="by"><img src="images/do.png" alt=""></li>
                </a>

                <div class="clearfix"> </div>
            </ul>


        </div>

    </div>

    <!---->
    <
</div>


<div class="clearfix"> </div>
</div>
<!---->

<div class="header" id="home">
    <ul class="header-in">
        <li><a href="createaccount.php">Register</a> </li>
        <li><a href="send_feedback.php">Feedback</a> </li>
        <li><a href="about_us.php">About Us</a></li>
        <li ><a href="contact_us.php" > Contact Us</a></li>
        <li ><a href="help.docx" >Help</a></li>
    </ul>
    <div class="clearfix"> </div>
</div>

</div>
</div>
</div>
<!---->



<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/image_slide.js"></script>
</body>
</html>