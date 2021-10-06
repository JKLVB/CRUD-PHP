<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen"/>
    <script src="/MiniProject/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/MiniProject/assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
        $('.datatables').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          }
        });
      } );
    </script>
    <!-- <script>
      $(document).ready(function() {
        $('#listar-usuario').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": {
              "url": "http://localhost:8080/MiniProject/lista/buscar/buscar.php",
              "type": "GET"
          });
          "columns": [
            { "data": "id"},
            { "data": "nome"},
            { "data": "login"},
            { "data": "senha"},
            { "data": "cpf"},
            { "data": "salario"},
            { "data": "cargo"},
            { "data": "bonificacao"},
          ],
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          },
          success: function (data) {
            /*$.each(data, function(a, b) {
                console.log(b);
            });*/
          }
        });
      } );
    </script> -->
    <title>Usuários</title>
</head>
<body>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/MiniProject/index.html">Voltar</a></li>
        </ol>
      </nav>
      <table class="display datatables" style="width:100%">
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
              <th scope="col">Opções</th>
            </tr>
            
          <?php
            include '/Users/Alvaro/Documents/workspace/php/MiniProject/assets/database/conexao.php';

            $sql = "SELECT * FROM projeto.funcionario ORDER BY id ASC";
            $result = $pdo->query($sql);
            $rows = $result->fetchall(PDO::FETCH_ASSOC);

            foreach($rows as $row) {
              echo "<tr class='table-light'>";
              echo("<td>".$row["id"]."</td>");
              echo("<td>".$row["nome"]."</td>");
              echo("<td>".$row["login"]."</td>");
              echo("<td>".$row["senha"]."</td>");
              echo("<td>".$row["cpf"]."</td>");
              echo("<td>".$row["salario"]."</td>");
              echo("<td>".$row["cargo"]."</td>");
              echo("<td>".$row["bonificacao"]."</td>");

              echo '<td>';
              echo '<div><a class="btn btn-info" href="/MiniProject/lista/bonificar/bonificar.php?id_funcionario='.$row['id'].'">Bonificar</a>';
              echo '<a class="btn btn-info" href="/MiniProject/lista/atualizar/alterar_salario.php?id_funcionario_update='.$row['id'].'">Alterar salário</a>';
              echo '<button type="button" class="btn btn-danger delete-btn" data-id="'.$row['id'].'">Deletar</button></div>';
              echo '</td>';
              echo "</tr>";
            }
          ?>
          </thead>
      </table>
      <script src="/MiniProject/assets/js/deletar.js"></script>
</body>
</html>