<?php
include_once("config.php");

if(isset($_POST['update'])){
    $id = $POST['id'];
     $username = $POST['username'];
      $name = $POST['name'];
       $surname = $POST['surname'];
        $email = $POST['email'];


        $sql ="UPDATE users SET username=:username, name=:name, surname=:surname, email=:email where id=:id";
        $prep = $conn->prepare($sql);
        $prep->bindParam(':id',$id);
         $prep->bindParam(':username',$username);
          $prep->bindParam(':name',$name);
           $prep->bindParam(':surname',$surnmae);
            $prep->bindParam(':email',$email);

            $prep->execute();

            header("Location:dashboard.php");
}



?>