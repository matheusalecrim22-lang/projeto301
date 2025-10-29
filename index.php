<?php include ('db_connection.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>To_do_List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>
            Minha To_do_List 
        </h1>
    <form action="add_task.php" method="POST">
        <input type="text" name="title" placeholder="nova tarefa..." required>
        <button type="submite"> Adicionar </button>
    </form>
    <hr>
    <ul>
        <?php
        $sql = "SELECT * FROM tasks ORDER BY id DESC";
        $result = $conn->query(query: $sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
            echo "<lie>";
            echo $row ['status'] == 'cncluida' ? "<s> {$row ['tittle']} </s>": $row ['tittle'];
            echo"
            <a href = 'update_task.php?id={$row['id']}'>V</a>
            <a href = 'delete_task.php?id={$row['id']}'>L</a>";
            echo "</li>";

        }
    }else{
        echo "<p> Nenhuma tarefa cadastrada.</php>";

    }

    ?>
    </ul>
</body>
</html>
