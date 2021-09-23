<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

header('Content-Type: application/json');

$salario = $_POST['salario'];

$id = $_POST['id'];

$update = $pdo->prepare('UPDATE projeto.funcionario SET salario = :salario WHERE id = :id') or die($pdo->error);
$update->bindValue(':salario', $salario);
$update->bindValue(':id', $id);

if($update->execute()){
    echo json_encode('Usuário atualizado com sucesso');
}else{
    echo json_encode('Erro ao atualizar o usuário');
}