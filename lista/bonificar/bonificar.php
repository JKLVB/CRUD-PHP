<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

// Consultar por ID
if(isset($_GET["id_funcionario"])){

    $id = $_GET["id_funcionario"];

    $sql = "SELECT salario, cargo FROM projeto.funcionario WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Bonificar funcionario
    if($rows[0]['cargo'] == "analista"){

    $sql_update = "UPDATE projeto.funcionario SET bonificacao = salario * 0.5 WHERE id = :id";
    $stmt_update = $pdo->prepare($sql_update);
    $stmt_update->bindParam(':id', $id);
    $result_update = $stmt_update->execute();
    header('Location: /MiniProject/lista/lista.php');
    }
    if($rows[0]['cargo'] == "designer"){

    $sql_update = "UPDATE projeto.funcionario SET bonificacao = salario * 0.3 WHERE id = :id";
    $stmt_update = $pdo->prepare($sql_update);
    $stmt_update->bindParam(':id', $id);
    $result_update = $stmt_update->execute();
    header('Location: /MiniProject/lista/lista.php');
    }
    if($rows[0]['cargo'] == "diretor"){

    $sql_update = "UPDATE projeto.funcionario SET bonificacao = salario * 0.7 WHERE id = :id";
    $stmt_update = $pdo->prepare($sql_update);
    $stmt_update->bindParam(':id', $id);
    $result_update = $stmt_update->execute();
    header('Location: /MiniProject/lista/lista.php');
    }
}