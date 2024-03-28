<?php
  require_once("conn.php");

  $metodo = $_GET["metodo"];
  echo $metodo;

  //Inserindo dados ao banco;
  if($metodo == "criar") {
    $pessoa = $_POST["pessoa"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

  try{ 
    
    $stmt = $conn->prepare("INSERT INTO funcionarios(pessoa, email, senha) VALUES (:pessoa, :email, :senha)");

    $stmt->bindParam( ":pessoa", $pessoa);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":senha", $senha);

    $stmt->execute();

    header("Location index.php");

  } catch(PDOException $e){
    
      echo $e->getMessage();
    } 
  //Atualizar dados da tabela;
  }else if($metodo == "editar"){
    $pessoa = $_POST["pessoa"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
  } try{ $stmt = $conn->prepare("UPDATE cadastros SET pessoa = :pessoa, email = :email WHERE id = :id");

    $stmt->bindParam(":pessoa", $pessoa);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":senha", $senha);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

  }catch(PDOException $e){

    echo $e->getMessage();
  }
?>
