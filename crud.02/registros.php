<?php
  require_once("conn.php");

  $metodo = $_GET["metodo"];
  echo $metodo;

  if($metodo == "criar") {
    $pessoa = $_POST["pessoa"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  //Inserindo dados ao banco;
  try{ $stmt = $conn->prepare("INSERT INTO cadastros(pessoa, email, senha) VALUES (:pessoa, :email, :senha)");

    $stmt->bindParam($pessoa, ":pessoa");

    $stmt->bindParam($email, ":email");

    $stmt->bindParam($senha, ":senha");

    $stmt->execute();
  } catch(PDOException $e){
      echo $e->getMessage();
    } 
  //Atualizar dados da tabela;
  }else if($metodo == "editar"){
    
  }
?>
