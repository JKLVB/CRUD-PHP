<?php

include '/opt/lampp/htdocs/CRUD-PHP/assets/database/conexao.php';

// Deletar por ID

  $id_deletar = $_POST['idUsuario'];

  $sql_deletar = "DELETE FROM projeto.funcionario WHERE id = :id";
  $stmt_deletar = $pdo->prepare($sql_deletar);
  $stmt_deletar->bindParam(':id', $id_deletar);
  $result_deletar = $stmt_deletar->execute();
  if($result_deletar){
    echo json_encode(true);
  }else{
    echo json_encode(false );
  }