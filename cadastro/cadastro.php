<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

header('Content-Type: application/json');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];

// echo json_encode("$nome, $login, $senha, $cpf, $salario, $cargo");

$consulta = $pdo->prepare('SELECT login, cpf FROM projeto.funcionario WHERE login = ? OR cpf = ?');
$consulta->execute(array($login, $cpf));
$rows = $consulta->fetchAll(PDO::FETCH_ASSOC);

if($rows){
    echo json_encode($rows);
}else{
    $inserir = $pdo->prepare('INSERT INTO projeto.funcionario (nome, login, senha, cpf, salario, cargo) VALUES(?, ?, ?, ?, ?, ?)');
    $inserir->execute(array($nome, $login, $senha, $cpf, $salario, $cargo));
    echo json_encode(false);
}