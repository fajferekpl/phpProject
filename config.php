<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "login_register";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
     die("<script>alert('Nie udało się połączyć.')</script>");

}
?>