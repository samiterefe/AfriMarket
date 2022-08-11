<?php
session_start();
unset($id);
session_destroy();
echo "you must log in first";
//header("location:index.php");
?>