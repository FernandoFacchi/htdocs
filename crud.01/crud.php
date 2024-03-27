<?php
  require_once("conn.php");

  
  $metodo = $_GET["metodo"];
  echo $metodo;

  // Inserindo dados no banco
  if($metodo == "criar") {
    $nome = $_POST["usuario"];
    $renda = $_POST["renda"];

   try{
      $stmt = $conn->prepare("INSERT INTO usuarios (nome, salario) VALUES (:nome, :renda)");

      $stmt->bindParam(":nome", $nome);

      $stmt->bindParam(":renda", $renda);

      $stmt->execute();

      header("Location: index.php");

    } catch (PDOException $e) {
        echo $e->getMessage();
      }
    
  }
  //Atualizar dados do banco
  else if($metodo == "editar") {
    $nome = $_POST["usuario"];
    $renda = $_POST["renda"];
    $id = $_POST["id"];
    

    try{
      $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, salario = :renda WHERE id = :id");
      
      $stmt->bindParam(":nome", $nome);

      $stmt->bindParam(":renda", $renda);

      $stmt->bindParam(":id", $id);


      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
      echo $e->getMessage();
     }
  } else if($metodo == "delete"){
    $id = $_POST["id"];

    try{
      $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      header("Location: index.php");
      
    } catch (PDOException $e) {
      echo $e->getMessage();
     }

  }
  
  


?>