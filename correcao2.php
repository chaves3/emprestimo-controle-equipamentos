
<?php 


include_once("conexao.php");


if (isset($_POST['id']) ||  isset($_POST['equipamento']) || isset($_POST['quantidade']) || isset($_POST['ativo']) || isset($_POST['cod_calibracao']) || isset($_POST['departamento']) || isset($_POST['data_retirada']) || isset($_POST['data_devolucao']) || isset($_POST['data_real']) || isset($_POST['responsavel_liberacao']) || isset($_POST['email_responsavel']) || isset($_POST['responsavel_devolucao']) || isset($_POST['email_destinado']) || isset($_POST['observacoes']) || isset($_POST['status'])){
	
$id = $_POST['id'];
$equipamento = $_POST['equipamento']; 
$quantidade = $_POST['quantidade']; 
$ativo = $_POST['ativo'];
$cod_calibracao = $_POST['cod_calibracao'];
$departamento = $_POST['departamento'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$data_real = $_POST['data_real'];
$responsavel_liberacao = $_POST['responsavel_liberacao'];
$email_responsavel = $_POST['email_responsavel'];
$responsavel_devolucao = $_POST['responsavel_devolucao'];
$email_destinado = $_POST['email_destinado'];
$observacoes = $_POST['observacoes'];
$status = $_POST['status'];


$sql = ("UPDATE cadastro SET equipamento = '$equipamento', quantidade = '$quantidade', ativo = '$ativo', cod_calibracao = '$cod_calibracao', departamento = '$departamento', data_retirada = '$data_retirada', data_devolucao = '$data_devolucao', data_real = '$data_real', responsavel_liberacao = '$responsavel_liberacao', email_responsavel = '$email_responsavel', responsavel_devolucao = '$responsavel_devolucao', email_destinado = '$email_destinado', observacoes = '$observacoes' , status = '$status' WHERE id = '$id'");


$salvar = mysqli_query($conexao, $sql);

print "<script>alert('Dados Atualizados')</script>";
print "<script>location.href= 'consulta_emprestimos.php'</script>";


$linhas = mysqli_affected_rows($conexao);

}


mysqli_close($conexao);



 ?>

