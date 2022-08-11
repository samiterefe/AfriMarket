<?php
$conn=mysqli_connect("localhost:3306","root","","final pro");

if($conn==true){
    echo"you connect sucssfully";
}
else{
    mysqli_conncet_error()or die("not connect");
}
$msg="";
if(isset($_POST['signup']))
{
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $region=$_POST["region"];
    $City=$_POST["City"];
    $House_Number=$_POST["House_Number"];
    $Phone=$_POST["Phone"];
    $Password=$_POST["Password"];
    $Confirm_Password=$_POST["Confirm_Password"];

    //echo $fullname;
    //echo $username;
    //echo $email;
   // echo $region;
   // echo $City;
    //echo $House_Number;
   // echo $Phone;
   // echo $Password;

    $query=mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username' ");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
        if($Password==$Confirm_Password){
            if(strlen($Password)>=6){
                $Password = md5($Password);
                $sql="INSERT INTO customer (fullname,username,email,region,City,House_Number,Phone,Password)
                                    VALUES ('$fullname','$username','$email','$region','$City','$House_Number','$Phone','$Password')";

                $result=mysqli_query($conn,$sql);


                if($result){
                    session_start();
                    $_SESSION['username']=$username;

                    header("Location:registration.php");
                } else{
                    echo "Failure";
                }
            }else{
                echo "<p style='color: red;'>password length mustn't less than 6 characters</p>";
            }
        }else
        {
            echo "<p style='color: red;'>The password you Entered doesn't match.</p>";
        }
    }else
    {
        echo " <p style='color: red;'>This Username is already registered.</p>";
    }





}
?>