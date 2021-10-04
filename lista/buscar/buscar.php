<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

$sql = "SELECT * FROM projeto.funcionario ORDER BY id ASC";
$result = $pdo->query($sql);
$rows = $result->fetchall(PDO::FETCH_ASSOC);
