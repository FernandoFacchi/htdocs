<?php
require_once("lista.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Registros</title>
</head>
<body> 
  <main class="bg-light-subtle">
    <div class="row text-center bg-primary text-light">
    <h1>Gestao de pessoas</h1>
    <h2>Cadastre seus funcionarios</h2>
    </div>
    <div class="d-flex justify-content-center mt-">
    <form action="dados.php?metodo=criar" method="post" class="form-group w-50">
      <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Usuário" minlength="45">
      </div>
      <div>
        <label for="salario">Salário: </label>
        <input type="text" name="salario" id="salario" class="form-control" placeholder="Renda mensal">
      </div>
      <div class="mt-2">
      <button class="btn btn-sm btn-success " type="submit" >Salvar</button>
      <button  class="btn btn-sm btn-danger" type="reset" >Limpar</button>
      </div>
    </form>
    </div> 
    <div class="d-flex justify-content-center">
      <div class="card w-50 mt-3">
        <div class="card-body">
        <table class="table table-striped">
      <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Salário</th>
        <th>Editar</th>
        <th>Excluir</th>
      </thead>
      <tbody>
      <?php foreach($funcionarios as $funcionario): ?>
        <tr>
          <td><?= $funcionario["id"] ?></td>
          <td><?= $funcionario["nome"]?></td>
          <td><?= $funcionario["salario"]?></td>
          <td>
            <form action="atualizar.php" method="post">
              <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
              <button class="btn btn-info">Editar</button>
            </form>
          </td>
          <td>
            <form action="dados.php?metodo=delete" method="post">
              <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
              <button class="btn btn-warning" >Excluir</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>