<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="/MiniProject/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <title>Usuários</title>
</head>
<body>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/MiniProject/index.html">Voltar</a></li>
        </ol>
      </nav>
        <table class="table table-striped">
        <thead class="table table-striped">
        <tr>
        <th scope="col">#</th> 
        <th scope="col">Nome</th>
        <th scope="col">Login</th>
        <th scope="col">Senha</th>
        <th scope="col">CPF</th>
        <th scope="col">Salário</th>
        <th scope="col">Cargo</th>
        <th scope="col">Bonificação</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        
    <?php

        include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

        $sql = "SELECT * FROM projeto.funcionario ORDER BY id ASC";
        $result = $pdo->query($sql);
        $rows = $result->fetchall(PDO::FETCH_ASSOC);

        foreach($rows as $row) {
        echo "<form>";
        echo "<tr class='table-light'>";
        echo("<td>".$row["id"]."</td>");
        echo("<td>".$row["nome"]."</td>");
        echo("<td>".$row["login"]."</td>");
        echo("<td>".$row["senha"]."</td>");
        echo("<td>".$row["cpf"]."</td>");
        echo("<td>".$row["salario"]."</td>");
        echo("<td>".$row["cargo"]."</td>");
        echo("<td>".$row["bonificacao"]."</td>");
        echo '<td><a class="btn btn-primary" href="/MiniProject/lista/bonificar/bonificar.php?id_funcionario='.$row['id'].'">Bonificar</a></td>';
        echo '<td><a class="btn btn-primary" href="/MiniProject/lista/atualizar/alterar_salario.php?id_funcionario_update='.$row['id'].'">Alterar salário</a></td>';
        echo '<td><button type="button" class="btn btn-danger delete-btn" data-id="'.$row['id'].'">Deletar</button></td>';
        echo "</tr>";
        } 
    ?>
        </tbody>
       </table>
       <script src="/MiniProject/assets/js/JQuery/jquery-3.6.0.min.js"></script>
       <script src="/MiniProject/assets/js/delete.js"></script>
</body>
</html>