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



if(isset($_POST["submit"]))
{
    $product_type = $_POST['product_type'];
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $imgInp= $_POST['imgInp'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];





    $result = mysqli_query($conn,"Select * from products where product_code='$product_code'") or mysqli_error($conn);

    $nr = mysqli_num_rows($result);

    if($nr == 0){
        $sql="INSERT INTO products (id,product_type,product_code,product_name,product_description,	product_img_name,price,quantity)
     VALUES ('',''$product_type','$product_code','$product_name','$product_description','$imgInp','$price','$quantity')" or mysqli_error($conn);

        mysqli_query($conn,$sql);
        //header("location : admin.php");
    }
    else
    {
        echo "This Product is Registered";

    }
}
?>

