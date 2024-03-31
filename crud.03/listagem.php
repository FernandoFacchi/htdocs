<?php 
  require_once("conexao.php");

  $stmt = $conn->prepare("SELECT * FROM funcionarios");

  $stmt->execute();

  $funcionarios = $stmt->fetchAll();
?>