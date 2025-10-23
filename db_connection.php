<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$cann = new  mysqli($servername, $username, $password, $dbname);
  if($cann -> connect_error){
    die("Error na conexao:". $cann -> connect_error):
  }
  ?>