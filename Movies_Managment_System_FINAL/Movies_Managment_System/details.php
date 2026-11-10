<?php
/*Creating a session based on a session identifier, passed via a GET or POST request.
We will include config.php for connection with database.
We will get the data of films from database based on each films ids.
Creating a form which will post some of those datas into book.php file
*/
session_start();
include_once('config.php');

if(isset($_GET['id'])) {
    $movie_id = $_GET['id'];
    $_SESSION['movie_id'] = $movie_id;

    $sql = "SELECT * FROM movies WHERE id = :id";
    $selectMovie = $conn->prepare($sql);
    $selectMovie->bindParam(':id', $movie_id);
    $selectMovie->execute();
    $movie_data = $selectMovie->fetch();
}
?>