<?php
 require_once("listagem.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
  <body>
    <header>
      <h1>Registro de funcionarios</h1>
    </header>
    <main>
      <form action="dados.php?metodo=criar" method="post">
        <div class="form-group">
          <label for="">Nome:</label>
          <input type="text" name="nome">
        </div>
        <div class="form-group">
          <label for="">Salario:</label>
          <input type="text" name="salario">
        </div>
        <div class="form-group">
          <input type="submit" value="Salvar">
        </div>
      </form>
    </main>
    <footer>
      <h2>Listagem de Funcionários</h2>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Salário</th>
            <th colspan="2">Editar Registro</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($funcionarios as $funcionario): ?>
          <tr>
            <td><?=$funcionario["id"]?></td>
            <td><?=$funcionario["nome"]?></td>
            <td><?=$funcionario["salario"]?></td>
            <td>
              <form action="atualizar.php" method="post">
                <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
                <button type="submit">Editar</button>
              </form>
            </td>
            <td>
            <form action="dados.php?metodo=delete" method="post">
                <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
                <button type="submit">Deletar</button>
            </form>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </footer>
  </body>
</html>