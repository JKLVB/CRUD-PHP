<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

// Deletar por ID
if(isset($_GET["id_funcionario"])){

  $id_deletar = $_GET["id_funcionario"];

  $sql_deletar = "DELETE FROM projeto.funcionario WHERE id = :id" or die($pdo->error);
  $stmt_deletar = $pdo->prepare($sql_deletar);
  $stmt_deletar->bindParam(':id', $id_deletar);
  $result_deletar = $stmt_deletar->execute();
  exit();
}
?>