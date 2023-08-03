<?php 

include_once("conexao.php");


if (isset($_POST['id']) || isset($_POST['data_aviso'])){


$id = $_POST['id'];
$data_aviso = $_POST['data_aviso'];


$sql = ("UPDATE novo SET data_aviso = '$data_aviso' WHERE id = $id");
	

$salvar = mysqli_query($conexao, $sql);

echo "Calibração atualizada com sucesso";


$linhas = mysqli_affected_rows($conexao);

}

mysqli_close($conexao);

