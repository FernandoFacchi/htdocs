<?php
  include_once("conexao.php");

  $metodo = $_GET["metodo"];
  $id = $_POST["id"];
  
  //Inserindo dados CREATE:
  if($metodo = "criar") {
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    
    try {
      $stmt = $conexao->prepare("INSERT INTO clientes(nome, salario) VALUES(:nome, :salario)");

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":salario", $salario);
        $stmt->execute();

      header("Location: index.php");
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
    //alterando dados UPDATE:
  } elseif($metodo = "alterar") {
    
    try {
      $stmt = $conexao->prepare("UPDATE clientes SET nome = :nome, salario = :salario WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":salario", $salario);
        $stmt->execute();

    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
  ?>