<?php
$host="localhost";
$user="root";
$pass="";
$db="ecommerce";
$con = mysqli_connect($host, $user, $pass, $db);

if ($con->connect_errno) {
    echo "no se conecta ";
}
?>