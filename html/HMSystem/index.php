<?php
$servername = "localhost";
$username = "client";
$password = "guest01";

//Create Connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>