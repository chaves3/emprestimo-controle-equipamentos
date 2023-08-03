<?php 

include_once("conexao.php");

$id = $_POST['id']; 

$sql = "DELETE FROM novo WHERE id = $id";

$salvar = mysqli_query($conexao, $sql);

print "<script>alert('Deletado com Sucesso')</script>";
print "<script>location.href= 'consulta_equipamento.php'</script>";

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);





 ?>