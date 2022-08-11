<?php
include ("includes/connection.php");
$user = $_GET['id'];
$date=date('Y-m-d');
$sql="delete FROM orderrrrr where username='$user' AND order_date='$date' " or die(mysql_error());
$result1 = mysqli_query($conn,$sql);


//echo "<script>windows: location='admin.php'</script>";
?>