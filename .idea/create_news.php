<?php
$conn=mysqli_connect("localhost:3306","root","","final pro");

if($conn==true){
    echo"you connect sucssfully";
}
else{
    mysqli_conncet_error()or die("not connect");
}
$msg="";
if(isset($_POST['submit']))
{
    $Title=$_POST["Title"];
    $update_news=$_POST["update_news"];

    //echo $fullname;
    //echo $username;

    $query=mysqli_query($conn ,"SELECT * FROM news WHERE Title = '$Title' ");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {

                $sql="INSERT INTO news (news_title,news_body)
                                    VALUES ('$Title','$username')";

                $result=mysqli_query($conn,$sql);





    }else
    {
        echo " <p style='color: red;'> is already exit.</p>";
    }





}
?>