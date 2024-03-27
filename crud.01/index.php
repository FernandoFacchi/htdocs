<?php
  session_start();
  // require_once("readId.php");
  require_once("read.php");

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
    <h1>Cadastros de Usuários</h1>
  </header>
  <main>
    <h2>Faça Seu Registro</h2>
    <form action="crud.php?metodo=criar" method="post">
      <div class="form-grup">
        <label for="user">Nome:</label>
        <input type="text" name="usuario" id="user" required>
      </div>
      <div class="form-grup">
      <label for="renda">Renda:</label>
        <input type="text" name="renda" id="renda" required>
      </div>
      <div class="form-grup">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
    <hr>
  </main>
  <footer>
    <h3>Listagem dos Usuários</h3>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Renda</th>
          <th>Editar</th>
          <th>Deletar</th>
        </tr>
      </thead>
      <tbody>
        <?php
           foreach($result as $item){
            $data = $item;
            echo '
              <tr>
                <td>
                  '.$item["id"].'
                </td>
                <td>
                  '.$item["nome"].'
                </td>
                <td>
                  '.$item["salario"].'
                </td>
                <td>
                  <form action="readId.php" method="POST">
                    <input type="hidden" name="id" value="'.$item["id"].'">
                    <button>Editar</button>
                  </form>
                </td>
                <td>
                  <form action="crud.php?metodo=delete" method="POST">
                    <input type="hidden" name="id" value="'.$item["id"].'">
                    <button>Excluir</button>
                  </form>
                </td>
            </tr>                   
            ';
          }
        ?>
      </tbody>
    </table>
  </footer>
</body>
</html>