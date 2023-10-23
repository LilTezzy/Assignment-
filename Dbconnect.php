<?php
$servername = "xampp"; //name of your server
$user ="tezzy";//the user created on your server while installing xampp
$password = "";//the password set when installing xampp
$DATABASE_NAME ="library";//name of the database created

//create connection
$conn = new mysqli($servername, $user, $password, $DATABASE_NAME);
?>