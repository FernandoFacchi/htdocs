<?php
  include_once("conexao.php");
  //Listando os dados READ:
  try {

    $stmt = $conexao->prepare("SELECT * FROM clientes");

    $stmt->execute();

    $dados = $stmt->fetchAll();
    
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
?>