<?php
  require_once("conn.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
  </head>
  <body>
    <header>
      <h1>Registro Central De Funcionários</h1>
    </header>
    <main>
      <h2>Cadastre Seus Funcionários</h2>
        <form action="cadastro.php?metodo=criar" method="post">
          <div class="form-group">
            <label for="">Pessoa: </label>
            <input type="text" name="pessoa">
          </div>
          <div class="form-group">
            <label for="">E-mail: </label>
            <input type="text" name="email">
          </div>
          <div class="form-group">
            <label for="">Senha: </label>
            <input type="text" name="senha">
          </div>
          <div class="form-group">
            <input type="submit" value="Registrar">
          </div>
        </form>
    </main>  
    <footer>

    </footer>
  </body>
</html>