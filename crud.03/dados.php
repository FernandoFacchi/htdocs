<?php
  require_once("conn.php");

  $metodo = $_GET["metodo"];
  

  if($metodo == "criar"){

    $nome = $_POST["nome"];
    $senha = $_POST["salario"];
    
    try {
      $stmt = $conn->prepare("INSERT INTO usuarios(nome, salario) VALUE(:nome, :salario)");

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":salario", $salario);
      $stmt->execute();

      header("Location: index.php");

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
?>