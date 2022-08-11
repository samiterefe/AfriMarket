<?php
if(isset($_POST["login"])){

    $username=$_POST['username'];
    $user_password=$_POST['password'];

    $database_username = "";
    $database_password = "";


    include("includes/connection.php");

    $user_password=md5($user_password);
    $query="SELECT * FROM customer WHERE username = '$username' and password='$user_password'";
    $result = mysqli_query($conn,$query);
    if($result->num_rows )
    {

            session_start();
            $_SESSION['username']=$username;


            /* Redirect browser */
            header("Location:login.php");
        }else{?>
            <br><a style="margin-left:45px;margin-top:0px; color: navajowhite; background-color: limegreen"><?php echo "Incorrect  try Again!";?></a>
        <?php
        }
    }else
    {
        ?>


    <?php

}

?>