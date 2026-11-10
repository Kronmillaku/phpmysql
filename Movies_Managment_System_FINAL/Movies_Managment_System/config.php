<?php
//Initialization of some variables for maintaining database data
$user="root";
$pass="";
$server="localhost";
$dbname="mms";

try {
    //Creating a PDO to connect with database
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
?>