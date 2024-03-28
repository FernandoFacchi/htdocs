<?php
  require_once("conn.php");

  $metodo = $_GET["metodo"];
  echo $metodo;

  //Inserindo dados ao banco;
  if($metodo == "criar") {
    $pessoa = $_POST["pessoa"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

  try{ 
    
    $stmt = $conn->prepare("INSERT INTO funcionarios(pessoa, email, telefone) VALUES (:pessoa, :email, :telefone)");

    $stmt->bindParam( ":pessoa", $pessoa);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":telefone", $telefone);

    $stmt->execute();

    header("Location: index.php");

  } catch(PDOException $e){
    
      echo $e->getMessage();
    } 
  //Atualizar dados da tabela;
  }else if($metodo == "editar"){
    $id = $_POST["id"];
    $pessoa = $_POST["pessoa"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
  
    try{ $stmt = $conn->prepare("UPDATE funcionarios SET pessoa = :pessoa, email = :email, telefone = :telefone WHERE id = :id");
    
    $stmt->bindParam(":pessoa", $pessoa);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":telefone", $telefone);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    header("Location: index.php");

  }catch(PDOException $e){

    echo $e->getMessage();
    }
  //deletando dados do registro
  }else if($metodo = "delete"){
    
    $id = $_POST["id"];

    try { $stmt = $conn->prepare("DELETE FROM funcionarios WHERE id = :id");

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  

?>
