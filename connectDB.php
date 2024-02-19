<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "ecommercedemo";

$con = new mysqli($host, $username, $password, $db);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else { 
    echo "Connect Database successfully!";
}
?>