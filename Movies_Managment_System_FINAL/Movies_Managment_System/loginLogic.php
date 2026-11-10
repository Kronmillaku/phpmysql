<?php
session_start();
include_once('config.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(':username', $username);
        $selectUser->execute();
        $user = $selectUser->fetch();

        if($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid username or password";
        }
    }
}
?>