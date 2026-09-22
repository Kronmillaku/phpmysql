<?php   

try{
    $pdo = new PDO("mysql:host=localhost;dbname=db","root","");


    $sql = "DROP TABLE products";

    $pdo->exec($sql);
    echo "table dropped succsesfully! ";

}catch(PDOException $e){
    echo "Error dropping table: ". $e->getMessage();
}


?>