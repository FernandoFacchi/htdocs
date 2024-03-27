<?php

$bancoCadastros = "cadastros";
$servidor = "localhost";
$usuario = "root";
$senha = "";

try {
  $conn = new PDO("mysql:host=$servidor;dbname=$bancoCadastros", $usuario, $senha);
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>