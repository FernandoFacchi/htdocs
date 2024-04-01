<?php
  require_once("conexao.php");
  
  $id = $_POST["id"];

  $stmt = $conn->prepare("SELECT * FROM funcionarios WHERE id = :id");

  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $funcionarios = $stmt->fetchAll();

  foreach($funcionarios as $funcionario){
    $id = $funcionario["id"];
    $nome = $funcionario["nome"];
    $email = $funcionario["email"];
    $senha = $funcionario["senha"];
    
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Alterações</title>
</head>
<body class="bg-secondary text-white">
  <main class="bg-secondary text-white">
    <div class="cabecalho cabecalho p-3 mb-2 bg-primary text-white">     
    <h1>Alterações de funcionarios</h1>
    <h3>Faça as alterações do usuário</h3>
    </div>
    <div class="d-flex justify-content-center">
      <form action="dados.php?metodo=editar" method="post" class="form-group w-50">
          <input type="hidden" name="id" value="<?= $id ?>">
        <div>
          <label for="nome">Nome: </label>
          <input type="text" name="nome" id="nome" value="<?= $nome ?>" required class="form-control">
        </div>
        <div>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" value="<?= $email ?>" required class="form-control">
        </div>
        <div>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" value="<?=$senha ?>" required class="form-control">
        </div>
        <div>
          <button class="btn btn-info mt-2" type="submit">Alterar</button>
          <button class="btn btn-warning mt-2"><a href="index.php"></a>Voltar</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>

