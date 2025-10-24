<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new  mysqli($servername, $username, $password, $dbname);
  if($conn -> connect_error){
    die("Error na conexao:". $conn -> connect_error):
  }
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new  mysqli($servername, $username, $password, $dbname);
  if($conn -> connect_error){
    die("Error na conexao:". $conn -> connect_error):
  }
>>>>>>> c547410019a9c947539f6e21e66203997517fa5c
  ?>