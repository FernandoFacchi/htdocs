<?php
  include_once("conexao.php");
  
  //Selecionando dados pelo id:
  $id = $_POST["id"];

  $stmt = $conexao->prepare("SELECT * FROM clientes WHERE id = :id");

  $stmt->bindParam(":id", $id);
  $stmt->execute();

  $cadastros = $stmt->fetchAll();

  foreach($cadastros as $cadastro){
    $cadastro
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar registros</title>
</head>
<body>
  <header>
    <h3>Altere o Registro selecionado</h3>
  </header>
  <main>
  <form action="crud.php?metodo=alterar" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="formulario">
          <label for="">Nome :</label>
          <input type="text" name="nome" value="<?= $nome ?>">
        </div>
        <div class="formulario">
          <label for="">Salário :</label>
          <input type="text" name="salario" value="<?= $salario ?>">
        </div>
        <div class="formulario">
          <input type="submit" value="Salvar">
        </div>
  </main>
</body>
</html>