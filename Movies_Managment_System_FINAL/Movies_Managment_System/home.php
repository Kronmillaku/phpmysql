<?php
/*
 We will include config.php for connection with database.
 We will fetch all datas from movies in database and show them.
*/
session_start();
include_once('config.php');

$sql = "SELECT * FROM movies";
$selectMovies = $conn->prepare($sql);
$selectMovies->execute();
$movies_data = $selectMovies->fetchAll();
?>