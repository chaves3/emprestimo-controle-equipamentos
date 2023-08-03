<?php 

include_once("conexao.php");



if (isset($_POST['equipamento']) || isset($_POST['quantidade']) || isset($_POST['ativo']) || isset($_POST['codigo_calibracao']) || isset($_POST['departamento']) || isset($_POST['data_retirada']) || isset($_POST['data_devolucao']) || isset($_POST['responsavel_pela_liberacao']) || isset($_POST['email_responsavel']) || isset($_POST['responsavel_devolucao']) || isset($_POST['email_destinado']) || isset($_POST['observacoes']) || isset($_POST['status'])){

$equipamento = $_POST['equipamento']; 
$quantidade = $_POST['quantidade']; 
$ativo = $_POST['ativo'];
$codigo_calibracao = $_POST['codigo_calibracao'];
$departamento = $_POST['departamento'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$responsavel_pela_liberacao = $_POST['responsavel_pela_liberacao'];
$email_responsavel = $_POST['email_responsavel'];
$responsavel_devolucao = $_POST['responsavel_devolucao'];
$email_destinado = $_POST['email_destinado'];
$observacoes = $_POST['observacoes'];
$status = $_POST['status'];


 $sql =  "INSERT INTO cadastro (equipamento, quantidade, ativo, cod_calibracao, departamento, data_retirada, data_devolucao, responsavel_liberacao, email_responsavel, responsavel_devolucao, email_destinado, observacoes, status) VALUES('".$equipamento."', '".$quantidade."', '".$ativo."', '".$codigo_calibracao."', '".$departamento."', '".$data_retirada."', '".$data_devolucao."', '".$responsavel_pela_liberacao."', '".$email_responsavel."', '".$responsavel_devolucao."', '".$email_destinado."', '".$observacoes."', '".$status."')";

$salvar = mysqli_query($conexao, $sql);

print "<script>alert('Empréstimo Realizado com Sucesso')</script>";
print "<script>location.href= 'consulta_emprestimos.php'</script>";

$linhas = mysqli_affected_rows($conexao);

}



mysqli_close($conexao);


include_once("enviar_email.php");

 ?>


