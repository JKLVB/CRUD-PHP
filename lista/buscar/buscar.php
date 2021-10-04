<?php

include '/opt/lampp/htdocs/MiniProject/assets/database/conexao.php';

$requestData= $_REQUEST;

$columns = array( 
	0 =>'id', 
	1 =>'nome',
	2 =>'login',
    3 =>'senha',
    4 =>'cpf',
    5 =>'salario',
    6 =>'cargo',
    7 =>'bonificacao'
);

$result_user = "SELECT * FROM projeto.funcionario";
$resultado_user = mysqli_query($result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

$result_usuarios = "SELECT * FROM projeto.funcionario WHERE 1=1";
if( !empty($requestData['search']['value']) ) {
	$result_usuarios.=" AND ( id LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR nome LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR login LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR senha LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR cpf LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR salario LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR cargo LIKE '".$requestData['search']['value']."%' )";
    $result_usuarios.=" OR bonificacao LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["id"];
	$dado[] = $row_usuarios["nome"];
	$dado[] = $row_usuarios["login"];
    $dado[] = $row_usuarios["senha"];
    $dado[] = $row_usuarios["cpf"];
    $dado[] = $row_usuarios["salario"];
    $dado[] = $row_usuarios["cargo"];
    $dado[] = $row_usuarios["bonificacao"];
	$dados[] = $dado;
}

$json_data = array(
	"draw" => intval( $requestData['draw'] ),
	"recordsTotal" => intval( $qnt_linhas ),
	"recordsFiltered" => intval( $totalFiltered ),
	"data" => $dados
);

echo json_encode($json_data);

// $sql = "SELECT * FROM projeto.funcionario ORDER BY id ASC";
// $result = $pdo->query($sql);
// $rows = $result->fetchall(PDO::FETCH_ASSOC);
