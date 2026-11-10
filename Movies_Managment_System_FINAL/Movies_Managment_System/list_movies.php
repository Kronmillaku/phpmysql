<?php
/*
  Listing movies / bookings and managing approvals or reviews.
*/
session_start();
include_once('config.php');

if(empty($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM movies";
$stmt = $conn->prepare($sql);
$stmt->execute();
$movies = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Movies List</h2>
    <a href="dashboard.php" class="btn btn-secondary mb-3">Back to Dashboard</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Quality</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($movies as $movie) { ?>
            <tr>
                <td><?php echo $movie['id']; ?></td>
                <td><?php echo $movie['movie_name']; ?></td>
                <td><?php echo $movie['movie_desc']; ?></td>
                <td><?php echo $movie['movie_quality']; ?></td>
                <td><?php echo $movie['movie_rating']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $movie['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $movie['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>