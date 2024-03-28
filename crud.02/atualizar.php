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
    <header>
      <h1>Edite O Registro do Funcionário</h1>
    </header>
    <main class="form-edit">
      <h3>Editar</h3>
      <form action="registros.php?metodo=editar" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-group">
          <label for="pessoa">Pessoa: </label>
          <input type="text" name="pessoa" value="<?= $pessoa ?>" maxlength="45" minlength="4" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail: </label>
          <input type="email" name="email" value="<?= $email ?>" required>
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" name="telefone" value="<?= $telefone ?>" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Alterar">
          <button><a href="index.php">Voltar</a></button>
        </div>
      </form>
    </main>
  </body>
</html>