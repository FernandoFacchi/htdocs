<?php

  require_once("conn.php");

  $id = $_POST["id"];

  $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE id = :id");

  $stmt->bindParam(":id", $id);

  $stmt->execute();
   
  $funcionarios = $stmt->fetchall();


  foreach ($funcionarios as $funcionario) {

    $id = $funcionario["id"];
    
    $pessoa = $funcionario["pessoa"];

    $email = $funcionario["email"];

    $telefone = $funcionario["telefone"];
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterações de cadastros</title>
  <link rel="stylesheet" href="style.css">
</head>
  <body>
    <main>
      <form action="registros.php?metodo=editar" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-group">
          <label for="">Pessoa: </label>
          <input type="text" name="pessoa" value="<?= $pessoa ?>">
        </div>
        <div class="form-group">
          <label for="">E-mail: </label>
          <input type="text" name="email" value="<?= $email ?>">
        </div>
        <div class="form-group">
          <label for="">Telefone: </label>
          <input type="text" name="telefone" value="<?= $telefone ?>">
        </div>
        <div class="form-group">
          <input type="submit" value="Alterar">
        </div>
      </form>
    </main>
  </body>
</html>