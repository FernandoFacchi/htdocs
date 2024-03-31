<?php

$banco = "usuarios";
$servidor = "localhost";
$usuario = "root";
$senha = "";

try {
  $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
  
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>