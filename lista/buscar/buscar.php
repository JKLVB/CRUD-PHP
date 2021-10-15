<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

$sql = "SELECT * FROM projeto.funcionario ORDER BY id ASC";
$result = $pdo->query($sql);
$rows = $result->fetchall(PDO::FETCH_ASSOC);

$json_data = array("data" => $rows);

echo json_encode($json_data);