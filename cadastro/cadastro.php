<?php

include '/opt/lampp/htdocs/CRUD-PHP/assets/database/conexao.php';

header('Content-Type: application/json');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];

// echo json_encode("$nome, $login, $senha, $cpf, $salario, $cargo");

$consulta = $pdo->prepare('SELECT login FROM projeto.funcionario WHERE login = ?');
$consulta->execute(array($login));
$rows = $consulta->fetchAll(PDO::FETCH_ASSOC);
$objLogin = $rows;

if($objLogin){
    echo json_encode($objLogin);
}else{
    $consulta = $pdo->prepare('SELECT cpf FROM projeto.funcionario WHERE cpf = ?');
    $consulta->execute(array($cpf));
    $rows = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $objCpf = $rows;

    if($objCpf){
        echo json_encode($objCpf);
    }else{
        $inserir = $pdo->prepare('INSERT INTO projeto.funcionario (nome, login, senha, cpf, salario, cargo) VALUES(?, ?, ?, ?, ?, ?)');
        $inserir->execute(array($nome, $login, $senha, $cpf, $salario, $cargo));
        echo json_encode(false);
    }
}