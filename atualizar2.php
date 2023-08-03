<?php 

include_once("conexao.php");


if (isset($_POST['id']) ||  isset($_POST['nome_equipamento']) || isset($_POST['fabricante']) || isset($_POST['modelo']) || isset($_POST['certificado']) || isset($_POST['descricao']) || isset($_POST['data_calibracao']) || isset($_POST['nf_orc']) || isset($_POST['observacoes']) || isset($_POST['cod_calibracao']) || isset($_POST['data_aviso'])|| isset($_POST['status'])){

$id = $_POST['id'];
$nome_equipamento = $_POST['nome_equipamento'];
$fabricante = $_POST['fabricante'];
$modelo = $_POST['modelo'];
$certificado = $_POST['certificado']; 
$descricao = $_POST['descricao'];
$data_calibracao = $_POST['data_calibracao'];
$nf_orc = $_POST['nf_orc'];
$observacoes = $_POST['observacoes'];
$cod_calibracao = $_POST['cod_calibracao'];
$data_aviso = $_POST['data_aviso'];
$status = $_POST['status'];

$sql = ("UPDATE novo SET nome_equipamento = '$nome_equipamento', fabricante = '$fabricante', modelo = '$modelo', certificado = '$certificado', descricao = '$descricao', data_calibracao = '$data_calibracao', nf_orc = '$nf_orc', observacoes = '$observacoes', cod_calibracao = '$cod_calibracao',  data_aviso = '$data_aviso', status = '$status' WHERE id = $id");
	

$salvar = mysqli_query($conexao, $sql);

print "<script>alert('Dados Atualizados')</script>";
print "<script>location.href= 'consulta_equipamento.php'</script>";


$linhas = mysqli_affected_rows($conexao);

}

mysqli_close($conexao);




 ?>