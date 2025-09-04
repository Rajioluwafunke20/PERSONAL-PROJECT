<?php
$host = "localhost";
$username = "root";
$password = ""; 
$database = "stylesbymercy"; 


$connection = new mysqli($host, $username, $password, $database); 

if ($connection->connect_error) {
    die("unable to connect");
}
print_r($connection);