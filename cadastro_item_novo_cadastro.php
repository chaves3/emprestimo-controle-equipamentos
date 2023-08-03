<?php 

include_once("conexao.php");

if(isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time())  . $extensao;
    $dirtetorio = "comprovante/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dirtetorio.$novo_nome);
}

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

 
 $sql = "INSERT INTO novo (nome_equipamento, fabricante, modelo, certificado, descricao, data_calibracao, nf_orc, observacoes, cod_calibracao, data_aviso, status, comprovante) VALUES ('".$nome_equipamento."', '".$fabricante."', '".$modelo."', '".$certificado."', '".$descricao."', '".$data_calibracao."', '".$nf_orc."', '".$observacoes."', '".$cod_calibracao."', '".$data_aviso."', '".$status."', '".$novo_nome."')";

$salvar = mysqli_query($conexao, $sql);

print "<script>alert('Novo Equipamento Cadastrado com Sucesso')</script>";
print "<script>location.href= 'consulta_equipamento.php'</script>";

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

include_once("teste_email.php");

 ?>

 