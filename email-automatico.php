<?php 

require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nome_equipamento = utf8_decode($_POST['nome_equipamento']); 
$fabricante = utf8_decode($_POST['fabricante']); 
$modelo = utf8_decode($_POST['modelo']);
$certificado = utf8_decode($_POST['certificado']);
$descricao = utf8_decode($_POST['descricao']);
$data_calibracao = utf8_decode($_POST['data_calibracao']);
$nf_orc = utf8_decode($_POST['nf_orc']);
$observacoes = utf8_decode($_POST['observacoes']);
$cod_calibracao = utf8_decode($_POST['cod_calibracao']);
$data_aviso = utf8_decode($_POST['data_aviso']);
$status = utf8_decode($_POST['status']);


try {
    $mail->SMTPDebug = SMTP: :DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPSecure = "tls";
    //echo 'SMTP secure...<br/>';
    $mail->SMTPAuth = true;
    $mail->Username = 'laboratoriodevalidacao@gmail.com';
    $mail->Password = 'kzwlyeucmvzpgkun';
    $mail->Port = 587;
    $mail->CharSet = "UTF-8";
    $mail->setFrom('laboratoriodevalidacao@gmail.com');
    $mail->addAddress('matheus.chaves.da.silva@aptiv.com');
    //$mail->addAddress('suzelaine.dos.santos@aptiv.com');
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    $mail->isHTML(true);
    $mail->Subject = 'equipamento do Laboratorio precisa calibrar';
    $mail->Body = "nome do equipamento = $nome_equipamento, fabricante = $fabricante, modelo = $modelo, certificado = $certificado, descricao = $descricao, data de Calibracao = $data_calibracao, nota fiscal = $nf_orc, observacoes = $observacoes, codigo de calibracao = $cod_calibracao, data de aviso =  $data_aviso, status = $status";
    
    $mail->AltBody = "teste_email";
    
//  echo 'SMTP send...<br/>';
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}


 ?>