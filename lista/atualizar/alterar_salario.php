<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/MiniProject/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="/MiniProject/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <title>Alterar salário</title>
</head>
<body>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/MiniProject/lista/lista.php">Voltar</a></li>
        </ol>
      </nav>
    <?php    
        include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

        if(isset($_GET['id_funcionario_update'])){
            $id = $_GET['id_funcionario_update'];

            $sql = "SELECT * FROM projeto.funcionario WHERE id = :id_funcionario";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id_funcionario', $id);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>
    <div class="container">
            <h3 style="text-align:center; height: 70px; margin-top: 40px;">Alterar salário</h3>
            <form id="formAtualizar" name="formAtualizar">
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" id="id_funcionario_update" name="id_funcionario_update" value="<?php echo($rows[0]["id"])?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputSalario3" class="col-sm-1 col-form-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nome" name="nome" value="<?php echo($rows[0]["nome"])?>" readonly=“true”>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputSalario3" class="col-sm-1 col-form-label">Cargo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo($rows[0]["cargo"])?>" readonly=“true”>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputSalario3" class="col-sm-1 col-form-label">Salário</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="salario" name="salario" value="<?php echo($rows[0]["salario"])?>">
                    </div>
                  </div>
                <button type="submit" class="btn btn-info">Atualizar</button>
            </form>
    </div>
    <script src="/MiniProject/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/MiniProject/assets/js/atualizar.js"></script>
</body>
</html>