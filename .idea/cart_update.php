<?php
session_start();
include_once("config.php");
include_once("conn.php");

$balance=0;
$bal = 0;
$amount=0;
$grand_total=0;
$qua=0;
$counter=0;
$counter++;

$amount = $_SESSION['total'];
$_SESSION['name']="";
$proname = $_SESSION['name'];
$procode = $_SESSION['code'];
$proqty = $_SESSION['qty'];
$id = $_SESSION['id'];




$query = mysql_query("SELECT * FROM  customer WHERE user_name = '$id' ") or die (mysql_error());
$row = mysql_fetch_array($query);
$fn = $row['fname'];
$ln = $row['lname'];

$res = mysql_query("Select * from  cus_coupon where user_name  = '{$id}'");
if((mysql_num_rows($res))==1){
    while($row = mysql_fetch_array($res)){
        $balance = $row['balance'];
        if($balance > $amount){
            $balance = $balance - $amount;

            mysql_query("UPDATE cus_coupon set balance='{$balance}' where user_name  = '{$id}'")
            or die("Un able to update the table");

            $resullt= mysql_query("insert into control_time (user_name,order_time) Values('$id','".date("H:i:s")."')");

            $resu = mysql_query("Select * from  products where product_code  = '{$procode}'");
            if((mysql_num_rows($resu))==1){
                while($row = mysql_fetch_array($resu)){
                    $qua = $row['quantity'];
                    if($qua > $proqty){
                        $qua = $qua - $proqty;

                        mysql_query("UPDATE products set quantity='{$qua}' where product_code  = '{$procode}'")
                        or die("Un able to update the table");

                    }
                }

            }



        }
        else{
            echo"<script>alert('You Do not Have Enough Money Pls Charge Your Account ')</script>";
            echo "<script>windows: location='customerindex.php'</script>";
        }
    }
}
else{
    echo"<script>alert('You Do not Have Enough Money Pls Charge Your Account ')</script>";
    echo "<script>windows: location='cop_form.php'</script>";
}



//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

?>



<?php



//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["product_qty"]>0)
{
    foreach($_POST as $key => $value){ //add all post vars to new_product array
        $new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
    //remove unecessary vars
    unset($new_product['type']);
    unset($new_product['return_url']);

    //we need to get product name and price from database.
    $statement = $mysqli->prepare("SELECT product_name, price FROM products WHERE product_code=? LIMIT 1");
    $statement->bind_param('s', $new_product['product_code']);
    $statement->execute();
    $statement->bind_result($product_name, $price);

    while($statement->fetch()){

        //fetch product name, price from db and add to new_product array
        $new_product["product_name"] = $product_name;
        $new_product["product_price"] = $price;

        if(isset($_SESSION["cart_products"])){  //if session var already exist
            if(isset($_SESSION["cart_products"][$new_product['product_code']])) //check item exist in products array
            {
                unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item
            }
        }
        $_SESSION["cart_products"][$new_product['product_code']] = $new_product; //update or create product session with new item  
    }
}


//mysql_query("insert into control_time (user_name,order_time) Values('$id','".date("H:i:s")."')");

if(isset($_POST["price"]) && is_array($_POST["price"]))
    if(isset($_POST["grand_total"]) && is_array($_POST["grand_total"]))
        if(isset($_POST["tax_amount"]) && is_array($_POST["tax_amount"]))
            if(isset($_POST["product_code"]) && is_array($_POST["product_code"]))
                if(isset($_POST["product_name"]) && is_array($_POST["product_name"]))
                    if(isset($_POST["product_qty"]) && is_array($_POST["product_qty"]))
                    {
                        $id = $_SESSION['id'];

                        $query = mysql_query("SELECT * FROM  customer WHERE user_name = '$id' ") or die (mysql_error());
                        $row = mysql_fetch_array($query);
                        $fn = $row['fname'];
                        $ln = $row['lname'];

                        $checkbox=$_POST['product_code'];
                        $checkbox1=$_POST['product_name'];
                        $checkbox2=$_POST['product_qty'];
                        $checkbox3=$_POST['grand_total'];
                        $checkbox4=$_POST['tax_amount'];
                        $checkbox5=$_POST['price'];

                        $date=date('Y-m-d');
                        for($i=0; $i<sizeof($checkbox);$i++)
                        {
                            mysql_query("Insert into orderrrrr (cus_fname,cus_lname,pro_code,pro_name,order_date,user_name,quantity,price)
values('$fn','$ln','".$checkbox[$i]."','".$checkbox1[$i]."',NOW(),'$id','".$checkbox2[$i]."','".$checkbox5[$i]."')") or die("un able to insert data to account");

                            mysql_query("Insert into sales (cus_name,pro_code,brand,quantity_sold,date,user_name)
values('$fn','".$checkbox[$i]."','".$checkbox1[$i]."','".$checkbox2[$i]."','$date','$id')") or die (mysql_error());




                            $resul = mysql_query("Select * from  products where product_code  = '".$checkbox[$i]."'");
                            if((mysql_num_rows($resul))==1){
                                while($row = mysql_fetch_array($resul)){
                                    $qua = $row['quantity'];
                                    if($qua > $checkbox2[$i]){
                                        $subqua = $qua - $checkbox2[$i];

                                        mysql_query("UPDATE products set quantity='{$subqua}' where product_code  = '".$checkbox[$i]."'")
                                        or die("Un able to update the table");

                                    }
                                }

                            }



                            echo "<script>windows: location='customerindex.php'</script>";
                        }

                    }


?>
















