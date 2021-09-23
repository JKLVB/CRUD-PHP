<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

header('Content-Type: application/json');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];

$inserir = $pdo->prepare('INSERT INTO projeto.funcionario (nome, login, senha, cpf, salario, cargo) VALUES(:no, :lo, :se, :cp, :sa, :ca)') or die($pdo->error);
$inserir->bindValue(':no', $nome);
$inserir->bindValue(':lo', $login);
$inserir->bindValue(':se', $senha);
$inserir->bindValue(':cp', $cpf);
$inserir->bindValue(':sa', $salario);
$inserir->bindValue(':ca', $cargo);
$inserir->execute();

if($inserir->rowCount() >= 1){
    echo json_encode('Usuário cadastrado com sucesso');
}else{
    echo json_encode('Erro ao cadastrar o usuário');
}