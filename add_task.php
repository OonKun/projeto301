<?php
 include ('db_connection.php');
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $sql = "INSERT INTO tasks (title,status,created_at)VALUES('$title','pedente',NOW())";
    if ($conn -> query($sql) === TRUE){
    header ("location: index.php");
    exit;}else{
    echo "Erro: ".$conn ->error;

   }
    }
 $conn ->close(); 
 ?>
 