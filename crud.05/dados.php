<?php 
  require_once("conexao.php");

  $metodo = $_GET["metodo"];

  if($metodo == "criar") {
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    try {
      $stmt = $conn->prepare("INSERT INTO funcionarios(nome, salario) VALUES(:nome, :salario)");
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":salario", $salario);
      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
       echo $e->getMessage();
    }
  } elseif ($metodo == "editar") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    try {
      $stmt = $conn->prepare("UPDATE funcionarios SET nome = :nome, salario = :salario WHERE id = :id");
      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":salario", $salario);
      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
       echo $e->getMessage();
    }
  } elseif ($metodo == "deletar") {
    $id = $_POST["id"];
    try {
      $stmt = $conn->prepare("DELETE FROM funcionarios WHERE id = :id");
      $stmt->bindParam(":id", $id);
      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
       echo $e->getMessage();
      } 
  }
?>