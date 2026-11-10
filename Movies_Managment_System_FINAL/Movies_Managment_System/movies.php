<?php
/*
  We will include config.php for connection with database.
  We will fetch all movies from database and show them to users.
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
$movies_data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies - Movies Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Available Movies</h2>
        <a href="home.php" class="btn btn-secondary">Back to Home</a>
    </div>

    <div class="row">
        <?php foreach($movies_data as $movie) { ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <?php if(!empty($movie['movie_image'])) { ?>
                        <img src="movie_images/<?php echo $movie['movie_image']; ?>" class="card-img-top" alt="Movie Image" style="height: 200px; object-fit: cover;">
                    <?php } ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie['movie_name']; ?></h5>
                        <p class="card-text"><?php echo substr($movie['movie_desc'], 0, 100); ?>...</p>
                        <p class="text-muted">Quality: <?php echo $movie['movie_quality']; ?> | Rating: <?php echo $movie['movie_rating']; ?></p>
                        <a href="details.php?id=<?php echo $movie['id']; ?>" class="btn btn-primary">View Details & Book</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>