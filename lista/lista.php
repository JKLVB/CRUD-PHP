<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/MiniProject/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#listar-usuario').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "http://localhost:8080/MiniProject/lista/buscar/buscar.php",
                "type": "POST"
            }
          });
      } );
    </script>
    <title>Usuários</title>
</head>
<body>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/MiniProject/index.html">Voltar</a></li>
        </ol>
      </nav>
      <table id="listar-usuario" class="table table-striped" style="width:100%">
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
      </table>
      <script src="/MiniProject/assets/js/jquery-3.6.0.min.js"></script>
      <script src="/MiniProject/assets/js/delete.js"></script>
</body>
</html>