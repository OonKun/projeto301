<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>To_Do_List</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
<h1>Minha To_Do_List<h1>
<form action = "add_task.php"method = "POST">
<input type = "text" name = "title" placeholder = "Nova tarefa...">   
<button type = "submit">Adicionar</button>
</form>

<hr>

<u1>
    <?php
    $sql = "SELECT" * FROM tasks ORDER BY id DESC";
    $result = $conn -> query($sql);
    
    if ($result-> num_rows > 0){
     while ($row = $result ->fect_assoc()){
     echo"<li>";
     echo $row['status'] == 'concluida'?"<s>{row['title']}</s>":$row['title];
     echo"
    <a href = 'uptade_task.php?id={$row['id']}>X</a> 
    <a href = 'delete_task.php?id={$row['id']}>L</a>
    echo "</li>";
  }
}else{
    echo "<p>nenhuma tarefa cadastrada.</p>";
}
?>
</u1>    
</body>
</html>