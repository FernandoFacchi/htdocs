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
  <title>Alterações</title>
</head>
<body>
  <header>
    <h1>Alterações de funcionários</h1>
  </header>
  <main>
    <form action="dados.php?metodo=editar" method="post">
      <div>
        <input type="hidden" name="id" value="<?= $id?>">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
      </div>
      <div>
        <label for="salario">salario: </label>
        <input type="text" name="salario" id="salario" value="<?= $salario ?>">
      </div>
      <div>
      <input type="submit" value="Alterar">
      <button><a href="index.php"></a>Voltar</button>
      </div>
    </form>
  </main>
</body>
</html>