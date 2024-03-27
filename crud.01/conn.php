<?php
  $banco = "registros";
  $server = "localhost";
  $user = "root";
  $pass = ""; 
  
  try 
  {
    $conn = new PDO("mysql:host=$server;dbname=$banco", $user, $pass);

  } catch (PDOException $e) {
    echo $e->getMessage();
  }