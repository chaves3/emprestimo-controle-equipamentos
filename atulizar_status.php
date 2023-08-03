<?php 


include_once("conexao.php");


if (isset($_POST['id']) || isset($_POST['status'])){
	
$id = $_POST['id'];
$status = $_POST['status'];


$sql = ("UPDATE cadastro SET status = '$status' WHERE id = '$id'");


$salvar = mysqli_query($conexao,$sql);

echo "status atualizados com sucesso";


$linhas = mysqli_affected_rows($conexao);

}


mysqli_close($conexao);



 ?>
