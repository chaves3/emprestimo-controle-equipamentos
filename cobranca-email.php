

<?php 

require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$equipamento = utf8_decode($_POST['equipamento']); 
$quantidade = utf8_decode($_POST['quantidade']); 
$ativo = utf8_decode($_POST['ativo']);
$codigo_calibracao = utf8_decode($_POST['codigo_calibracao']);
$departamento = utf8_decode($_POST['departamento']);
$data_retirada = utf8_decode($_POST['data_retirada']);
$data_devolucao = utf8_decode($_POST['data_devolucao']);
$responsavel_pela_liberacao = utf8_decode($_POST['responsavel_pela_liberacao']);
$email_responsavel = utf8_decode($_POST['email_responsavel']);
$responsavel_devolucao = utf8_decode($_POST['responsavel_devolucao']);
$email_destinado = utf8_decode($_POST['email_destinado']);
$observacoes = utf8_decode($_POST['observacoes']);
$status = utf8_decode($_POST['status']);


try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPSecure = "tls";
    //echo 'SMTP secure...<br/>';
    $mail->SMTPAuth = true;
    $mail->Username = 'laboratoriodevalidacao@gmail.com';
    $mail->Password = 'kzwlyeucmvzpgkun';
    $mail->Port = 587;
    $mail->setFrom('laboratoriodevalidacao@gmail.com');
    $mail->addAddress($email_responsavel);
    $mail->addAddress($email_destinado);
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    $mail->isHTML(true);
    $mail->Subject = "O prazo de emprestimo";
    $mail->Body = "equipamento = $equipamento, <br> 
    quantidade = $quantidade, <br> 
    ativo = $ativo, <br> 
    codigo de Calibracao = $codigo_calibracao, <br> 
    departamento = $departamento, <br> 
    data de retirada = $data_retirada, <br> 
    data de devolucao = $data_devolucao, <br> 
    responsavel pela liberacao = $responsavel_pela_liberacao,<br> 
    email responsavel =  $email_responsavel,<br> 
    responsavel pela devolucao = $responsavel_devolucao, <br> 
    email destinado = $email_destinado, <br> 
    observacoes = $observacoes, <br> 
    status = $status " . "O prazo de emprestimo passou por favor consultar o laboratório de onde você pegou o equipamento";
    
    $mail->AltBody = "teste_email";
    
//  echo 'SMTP send...<br/>';
    if($mail->send()) {
 print "<script>alert('E-mail Enviado')</script>";
 print "<script>location.href = 'consulta_emprestimos.php'</script>";
    } else {
         print "<script>alert('E-mail não Enviado')</script>";
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}


 ?>