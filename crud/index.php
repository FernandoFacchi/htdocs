<?php
  require_once("conn.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro de Usuários</title>
  </head>
  <body>
   <header>
    <nav>

    </nav>
     <h1>Registro de Usuários</h1>
   </header>
  <main>
    <h2>Cadastre-se</h2>
    <form action="crud.php?metodo=criar" method= "POST">
      <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
      </div>
      <div>
        <label for="salario">Salário: </label>
        <input type="text" name="salario" id="salario" placeholder="R$ 00,00">
      </div>
      <div>
        <input type="submit" value="Cadastrar">
      </div>
    </form>
  <div class="list-user">
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Salário</th>
        </tr>
      </thead>
      <tbody>
        <td><?= $nome[""]?></td>
      </tbody>
    </table>
  </div>
  </main>
   <footer>

   </footer>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>