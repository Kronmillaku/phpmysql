<?php   

try{
    $pdo = new PDO("mysql:host=localhost;dbname=db","root","");


    $sql = "ALTER TABLE products DROP column name(255)";

    $pdo->exec($sql);
    echo "Column dropped succsesfully! ";

}catch(PDOException $e){
    echo "Error deleting column: ". $e->getMessage();
}


?>