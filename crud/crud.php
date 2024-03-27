<?php
  include_once("conn.php");

  $metodo = $_GET["metodo"];

  $nome = $_POST["nome"];
  $salario = $_POST["data"];

  if($metodo == "criar"){
    try {        
      $stmt = $conn->prepare("INSERT INTO usuarios (nome, salario) VALUES (:nome, :salario)");
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':salario', $salario);
      $stmt->execute();
    
    } catch (PDOException $e) {

      return $e->getMessage();
    }
  }

  // if($metodo == "editar"){
  // }




