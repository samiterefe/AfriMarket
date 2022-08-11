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


$user = $_GET['id'];

$result1 = mysqli_query($conn,"delete FROM customer where username='$user'") ;


//$result1 = mysql_query("delete FROM customer where Employee_id='$user'") or die(mysql_error());

header("Location : remove_custemer.php ");
?>