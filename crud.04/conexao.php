<?php

  $banco = "registros";
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";

  try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    // echo "Conexão feita com sucesso!";

  } catch(PDOException $e) {
    echo $e->getMessage();
  }

?>