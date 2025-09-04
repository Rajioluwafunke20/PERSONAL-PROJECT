<?php
require "../config/connection.php";
function addUser($connection, $name, $email, $phoneNumber, $password){
    $statement = "INSERT INTO users (name, email, phoneNumber, password)
        VALUE ('$name', '$email', '$phoneNumber', '$password')";
    
    $result = $connection->query($statement);
    if ($result) {
        return true;
    } else {
        return false;
    }
}