<?php
  require_once("conexao.php");


  $id = $_POST["id"];

  try {
    $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE id = :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $funcionarios = $stmt->fetchAll();

    foreach($funcionarios as $funcionario){
      
      $id = $funcionario["id"];
      $nome = $funcionario["nome"];
      $salario = $funcionario["salario"];
    }

  } catch (PDOException $e) {
      echo $e->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Alteração</title>
</head>
<body>
  <header>
    <h1>Altere seus Registros</h1>
  </header>
  <main>
    <h2>Edite as informações do usuário</h2>
  <form action="dados.php?metodo=editar" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
      <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
      </div>
      <div>
        <label for="salario">Salário: </label>
        <input type="text" name="salario" id="salario" value="<?= $salario ?>">
      </div>
      <div>
        <input type="submit" value="Atualizar">
        <button><a href="index.php"></a>voltar</button>
      </div>
    </form>
  </main>
</body>
</html>