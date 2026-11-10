<?php
/*Creating a session based on a session identifier, passed via a GET or POST request.
We will include config.php for connection with database.
We will fetch all datas from users in database and show them.
If a user is admin, he can update or delete a user data.
*/
session_start();
include_once('config.php');

if(empty($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();
$users_data = $selectUsers->fetchAll();
?>