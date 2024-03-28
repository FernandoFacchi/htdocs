<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
  <body>
    <header>
      <h1>CADASTROS DE USUÁRIOS</h1>
    </header>
    <main>
    <form action="dados.php?metodo=criar" method="post">
      <div class="form-group">
        <label for="">Nome:</label>
        <input type="text" name="nome">

      </div>
      <div class="form-group">
        <label for="">Salário:</label>
        <input type="text" name= "salario">

      </div>
      <div class="form-group">
        <input type="submit" value="Salvar">

      </div>
    </form>
    </main>
    <footer>

    </footer>
  </body>
</html>