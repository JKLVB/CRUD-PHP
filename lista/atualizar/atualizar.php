<?php

include '../../assets/database/conexao.php';

header('Content-Type: application/json');

//Atualizar salário
$salario = $_POST['salario'];

$id = $_POST['id'];

$update = $pdo->prepare('UPDATE projeto.funcionario SET salario = :salario WHERE id = :id');
$update->bindValue(':salario', $salario);
$update->bindValue(':id', $id);

if($update->execute()){
    echo json_encode('Usuário atualizado com sucesso');
}else{
    echo json_encode('Erro ao atualizar o usuário');
}