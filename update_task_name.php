<?php
include('db_connection.php');

if($_SERVER["REQUEST_METHOD"] =="POST"){
echo "<h1>teste</h1>"; 
    $id=$_POST['id'];
    $title=$_POST['title'];
    $sql="UPDATE tasks SET title='$title' WHERE id=$id";
    if($conn->query ($sql)===TRUE){
        
        header("Location:index.php");
        exit;
    }else{
       
         echo"Erro ao atualizar:".$conn->error;
}  }
       $conn->close();
        ?>
       
