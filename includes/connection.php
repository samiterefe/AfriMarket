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