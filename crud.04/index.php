<?php
include_once("registros.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registros</title>
</head>
<body>
  <header>
    <h1>Registros dos Funcionários</h1>
  </header>
  <main>
    <h2>Área de Cadastro</h2>

      <form action="crud.php?metodo=criar" method="post">
        <div class="formulario">
          <label for="">Nome :</label>
          <input type="text" name="nome" id="">
        </div>
        <div class="formulario">
          <label for="">Salário :</label>
          <input type="text" name="salario" id="">
        </div>
        <div class="formulario">
          <input type="submit" value="Salvar">
          <input type="reset" value="Limpar">
        </div>
      </form>
    </main>
    <footer>
      <table>
        <thead>
          <th>ID</th>
          <th>Nome</th>
          <th>Salário</th>
          <th colspan="2">Editar Dados</th>
        </thead>
        <tbody>
          <?php foreach($dados as $dado): ?>
            <tr>
              <td><?= $dado["id"] ?></td>
              <td><?= $dado["nome"] ?></td>
              <td><?= $dado["salario"] ?></td>
              <td>
                <form action="alterar.php">
                  <button type="submit">Editar</button>
                </form>
              </td>
              <td><button>Deletar</button></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </footer>
  </body>
</html>