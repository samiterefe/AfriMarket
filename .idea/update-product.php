<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");
$_SESSION['$product_code']="";
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

    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <script type="text/javascript" src="js/boxOver.js"></script>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>


</head>



<body>
<!--header-->
<div class="container">
    <div class="content">

        <div class="col-md-9">


            <div class="modal-content">
                <form name="per_info" enctype="multipart/form-data" method="post">

                    <div class="modal-header">

                        <div class="modal-title"><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Product Catagory List</h6></div>

                    </div>


                    <div class="modal-body">


                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                                    <tr>
                                        <th>PRO CODE</th>
                                        <th>PRO NAME</th>
                                        <th>PRICE</th>


                                        <th>QUANTITY</th>
                                        <th>Action</th>




                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php



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

?>

                                    <?php
                                        $sql="select * from products order by id ASC" or die(mysqli_error($conn));
                                    $user_query=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($user_query)){


                                        $id=$row['id'];

                                        ?>

                                        <tr class="del<?php echo $id ?>">
                                            <td ><?php echo $row['product_code']; ?> </td>
                                            <td width="80"><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['price']; ?></td>

                                            <td><?php echo $row['quantity']; ?></td>
                                            <td>
                                                <a  rel="tooltip"  title="gg" id="v<?php echo $id; ?>" href="addproduct.php<?php echo '?id='.$row['product_code']; ?>"><i class='btn btn-danger'>Edit</i></a>

                                                <a  rel="tooltip"  title="hh" id="v<?php echo $id; ?>"  onclick="return confirmdelete();" href="delete_order.php<?php echo '?id='.$id; ?>"><i class='btn btn-danger'>Remove</i></a>
                                            </td>
                                            </td>

                                        </tr>
                                    <?php  }  ?>
                                    </tbody>
                                </table>
                            </div>

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