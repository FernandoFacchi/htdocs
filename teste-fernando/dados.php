<?php
  require_once("conexao.php");

  $metodo = $_GET["metodo"];

  if ($metodo == "criar") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
      $stmt = $conn->prepare("INSERT INTO funcionarios(nome, email, senha) VALUES(:nome, :email, :senha)");
      $stmt->bindParam(":nome", $nome);

      $stmt->bindParam(":email", $email);

      $stmt->bindParam(":senha", $senha);

      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  } elseif ($metodo == "editar") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
      $stmt = $conn->prepare("UPDATE funcionarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
      
      $stmt->bindParam(":id", $id);

      $stmt->bindParam(":nome", $nome);

      $stmt->bindParam(":email", $email);

      $stmt->bindParam(":senha", $senha);

      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  } elseif ($metodo == "delete") {

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