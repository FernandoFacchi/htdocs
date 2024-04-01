<?php
 require_once("lista.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  

  <title>Gestao de pessoas</title>
</head>
<body class="bg-secondary text-white">
  <main class="bg-secondary text-white">
    <div class="cabecalho p-3 mb-2 bg-primary text-white">
      <h1>Resgitro de funcionários</h1>
      <h3>Cadastre os Usuários</h3>
    </div>
    <div class="d-flex justify-content-center ">
      <form action="dados.php?metodo=criar" method="post" class="form-group w-50">
        <div class="form-group">
          <label for="nome">Nome: </label>
          <input type="text" name="nome" id="nome" class="form-control " maxlength="45" minlength="4" required placeholder="Usuário">
        </div>
        <div class="form-group">
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" class="form-control" maxlength="255" minlength="10" placeholder="Exemplo@exec.com">
        </div>
        <div class="form-group">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" class="form-control" min="8" max="20" required placeholder="Digite sua Senha">
        </div>
        <div class="form-group">
          <button class="btn btn-success mt-4 " type="submit">Salvar</button>
          <button class="btn btn-danger mt-4" type="reset">Limpar</button>
        </div>
      </form>
    </div>
      <div class=" d-flex justify-content-center ">
        <table class="table table-striped w-50 mt-4 border border-dark">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>E-mail</th>
              <!-- <th>Senha</th> -->
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
              <td><?= $funcionario["id"] ?></td>
              <td><?= $funcionario["nome"] ?></td>
              <td><?= $funcionario["email"] ?></td>
              <td>
                <form action="atualizar.php" method="post">
                  <input type="hidden" name="id" value="<?= $funcionario["id"]?>">
                  <button class="btn btn-outline-warning" type="submit">Editar</button>
                </form>
              </td>
              <td>
              <form action="dados.php?metodo=delete" method="post">
                  <input type="hidden" name="id" value="<?= $funcionario["id"]?>">
                  <button class="btn btn-outline-danger" type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>