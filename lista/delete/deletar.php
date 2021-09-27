<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

// Deletar por ID
if(isset($_GET["id_funcionario_delete"])){

  $id_deletar = $_GET["id_funcionario_delete"];

  $sql_deletar = "DELETE FROM projeto.funcionario WHERE id = :id";
  $stmt_deletar = $pdo->prepare($sql_deletar);
  $stmt_deletar->bindParam(':id', $id_deletar);
  $result_deletar = $stmt_deletar->execute();
  header('Location: /MiniProject/lista/lista.php');
}