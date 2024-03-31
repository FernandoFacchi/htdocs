<?php
require_once("lista.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Registros</title>
</head>
  <body>
    <header>
      <h1>Cadastros de Funcionarios</h1>
    </header>
    <main>
    <form class="formulario" action="dados.php?metodo=criar" method="post">
      <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
      </div>
      <div>
        <label for="salario">Salário: </label>
        <input type="text" name="salario" id="salario">
      </div>
      <div class="buttom">
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
      </div>
    </form>
    </main>
    <footer>
      <h2>LISTAGEM DE FUNCIONARIOS</h2>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Salário</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($funcionarios as $funcionario): ?>
          
          <tr>
            <td><?= $funcionario["id"]?></td>
            <td><?= $funcionario["nome"]?></td>
            <td><?= $funcionario["salario"]?></td>
            <td>
              <form action="editar.php" method="post">
                <input type="hidden" name="id" value="<?= $funcionario["id"]?>">
                <button type="submit">Editar</button>
              </form>
            </td>
            <td>
              <form action="dados.php?metodo=deletar" method="post">
                <input type="hidden" name="id" value="<?=$funcionario["id"]?>">
                <button type="submit">Excluir</button>
              </form>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </footer>
  </body>
</html>
