<?php
  require_once("conexao.php");

  $id = $_POST["id"]; 

  $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE id = :id");

  $stmt->bindParam(":id", $id);  

  $stmt->execute();

  $funcionarios = $stmt->fetchAll();

  foreach ($funcionarios as $funcionario) {
    $id = $funcionario["id"];
    $nome = $funcionario["nome"];
    $salario = $funcionario["salario"];
  }
?>

<!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
  <body>
    <main>
      <h2>Edite seus registros</h2>
      <form action="dados.php?metodo=alterar" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
          <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" value="<?= $nome ?>">
          </div>
            <div class="form-group">
            <label for="">Salario:</label>
            <input type="text" name="salario" value="<?= $salario ?>">
        </div>
        <div class="form-group">
          <input type="submit" value="alterar">
        </div>
      </form>
    </main>
  </body>
 </html>