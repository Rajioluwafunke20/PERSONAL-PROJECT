<pre>
<?php 
session_start();
// require_once "../config/connection.php";
require_once "../models/User.php";

$name = mysqli_real_escape_string($connection, $_POST["name"]);
$email =  mysqli_real_escape_string($connection, $_POST["email"]);
$PhoneNumber =  mysqli_real_escape_string($connection, $_POST["PhoneNumber"]);
$password =  mysqli_real_escape_string($connection, $_POST["password"]); 

if (empty($name) || empty($email) || empty($PhoneNumber) || empty($password)) {
    $_SESSION["error"] = "fill in all fields";
   return header("location:../register.php");
} else {
    $hashedPassword = sha1($password);
    if (addUser($connection, $name, $email, $phoneNumber, $hashedPassword) == true) {
        $_SESSION["user"] = true;
        $_SESSION["userEmail"] = $email;
        echo "successfull";
    }
}
