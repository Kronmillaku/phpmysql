<?php 
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=db4","root","");

    $username = "Jack";
    $password = "test";
    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";

    $pdo -> exec($sql);

    echo "New record created successfully";


}catch(Excpetion $e){
    echo $e -> getMessage();
}





?>