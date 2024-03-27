<?php
  include_once("conn.php");

  $data;

  $stmt = $conn->prepare("SELECT * FROM usuarios");
  
  $stmt->execute(); 

  $result = $stmt->fetchall();

?>