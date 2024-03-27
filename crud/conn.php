<?php

  session_start();
  
  $usuario = "root";
  $senha = "";
  $banco = "banco";
  $host = "localhost";

  try {
    $conn = new PDO("mysql:host={$host};dbname={$banco}", $usuario, $senha);

    if($conn){
      echo 'Conectado';
    }
  }catch (PDOException $e) {
    print "Erro" . $e->getMessage() . "</br>";
  }
?>