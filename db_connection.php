<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new  mysqli($servername, $username, $password, $dbname);
  if($conn -> connect_error){
    die("Error na conexao:". $conn -> connect_error);
  }
  ?>