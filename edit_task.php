++++<?php
include ('db_connection.php');
if (isset($_GET['id'])){
$id = $_GET ['id'];
$sql = "SELECT * FROM tasks WHERE id = $id";
$result = $conn-> query($sql);
if($result->num_rows==1){
    $task=$result->fetch_assoc();
}else{
    echo "Tafera não informada.";
    exit;
}}else{
    echo "ID da tarefa não informado";
    exit;
}
?>
<!DOCTYPE html>
<html lang ="pt-br">
    <head>
        <meta charset="UFT-8">
        <title> Editar Tarefa </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Editar Tarefa</h1>
    <form action="update_task_name.php" method="POST">
    <input type="hidden" name="id" value="<?php 
    echo $task['id'];?>">
    <input type="text" name="title" value="<?php htmlspecialchars($task['title']);?>" required>
    <button type="submit"> Salvar alterações </button>
    </form>
    <br>
    <a href="index.php">voltar</a>
</body>
</html>