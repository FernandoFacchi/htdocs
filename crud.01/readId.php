<?php
  session_start();
  include_once("conn.php");
  

  $id = $_POST["id"];

  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->execute(); 

  $result = $stmt->fetchall();

  foreach($result as $item){
    $nome = $item["nome"];

    $salario = $item["salario"];

    $id = $item["id"];
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar registros</title>
</head>
<body>
<label for="">Editar</label>
    <form action="crud.php?metodo=editar" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-grup">
        <label for="user">Nome:</label>
        <input type="text" name="usuario" id="user" value="<?php echo $nome ?>">
      </div>
      <div class="form-grup">
      <label for="renda">Renda:</label>
        <input type="text" name="renda" id="renda" value="<?php echo $salario ?>">
      </div>
      <div class="form-grup">
        <input type="submit" value="Alterar">
      </div>
    </form>
</body>
</html>
