<?php
  require_once("conn.php");

  $stmt = $conn->prepare("SELECT * FROM funcionarios");

  $stmt->execute();
  
  $funcionarios = $stmt->fetchAll();


?>