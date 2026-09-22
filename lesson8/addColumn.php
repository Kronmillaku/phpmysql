<?php   

try{
    $pdo = new PDO("mysql:host=localhost;dbname=db","root","");


    $sql = "ALTER TABLE products ADD email VARCHAR(255)";

    $pdo->exec($sql);
    echo "Column created succsesfully! ";

}catch(PDOException $e){
    echo "Error creating column: ". $e->getMessage();
}


?>