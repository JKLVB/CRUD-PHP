<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />

  <script src="/CRUD-PHP/node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script src="/CRUD-PHP/assets/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <script src="/CRUD-PHP/assets/js/deletar.js"></script>
  <script>
    $(document).ready(function() {
      $('#userdata').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": {
              "url": "http://localhost:8080/CRUD-PHP/lista/buscar/buscar.php",
              "type": "GET"
          },
          "columns": [
            { "data": "id"},
            { "data": "nome"},
            { "data": "login"},
            { "data": "senha"},
            { "data": "cpf"},
            { "data": "salario"},
            { "data": "cargo"},
            { "data": "bonificacao"},
            { "data": "id", 
                "render": function(data, row){
                  
                  var bonificar = '<a class="btn btn-info teste" href="/CRUD-PHP/lista/bonificar/bonificar.php?id_funcionario='+data+'">Bonificar</a>';
                  var altSalario = '<a class="btn btn-info teste" href="/CRUD-PHP/lista/atualizar/alterar_salario.php?id_funcionario_update='+data+'">Alterar salário</a>';
                  var deletar = '<a class="btn btn-danger delete-btn teste" onclick="javascript:deletar();" data-id='+data+'>Deletar</a>';
                  return bonificar + altSalario + deletar;
              }
            }
          ],
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
          },
        });
    });
  </script>

  <title>Usuários</title>
</head>

<body>
  <nav aria-label="breadcrumb" style=" padding: 10px 310px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="btn btn-info teste" href="/CRUD-PHP/index.html">Voltar</a></li>
    </ol>
  </nav>
  <div class="container">
    <table class="display" id="userdata" style="width:100%">
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
      </thead>
  </div>
  </table>
</body>
</html>