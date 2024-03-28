<?php
  require_once("listagem.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Registro Central De Funcionários</h1>
    </header>
    <main>
      <h2>Cadastre Seus Funcionários</h2>
        <form action="registros.php?metodo=criar" method="post">
          <div class="form-group">
            <label for="">Pessoa: </label>
            <input type="text" name="pessoa">
          </div>
          <div class="form-group">
            <label for="">E-mail: </label>
            <input type="text" name="email">
          </div>
          <div class="form-group">
            <label for="">Telefone: </label>
            <input type="text" name="telefone">
          </div>
          <div class="form-group">
            <input type="submit" value="Registrar">
          </div>
        </form>
    </main>  
    <footer>
      <h3>LISTAGEM DE FUNCIONARIOS</h3>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>Pessoa</th>
            <th>E-mail</th>
            <th colspan="1">Telefone</th>
            <th colspan="2">Editar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($funcionarios as $funcionario):?>
          <tr>
            <td><?= $funcionario["id"] ?></td>
            <td><?= $funcionario["pessoa"] ?></td>
            <td><?= $funcionario["email"] ?></td>
            <td><?= $funcionario["telefone"] ?></td>
            <td>
              <form action="atualizar.php" method="post">
                <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
                <button type="submit">Editar</button>
              </form>
            </td>
            <td>
            <form action="registros.php?metodo=delete" method="post">
                <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
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