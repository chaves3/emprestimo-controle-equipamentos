<?php 


require_once('consulta_calibracao.php');
require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;


$DateAndTime = date('Y-m-d');
             
             
      
$data_timestamp1 = new DateTime($data_calibracao);
$data_timestamp2 = new DateTime($data_aviso);
$data_timestamp3 = new DateTime($DateAndTime);

if ($data_timestamp3 > $data_timestamp2) {
    



$mail = new PHPMailer(true);

$nome_equipamento = utf8_decode($_POST['nome_equipamento']); 
$fabricante = utf8_decode($_POST['fabricante']); 
$modelo = utf8_decode($_POST['modelo']);
$certificado = utf8_decode($_POST['certificado']);
$descricao = utf8_decode($_POST['descricao']);
$data_calibracao = utf8_decode($_POST['data_calibracao']);
$observacoes = utf8_decode($_POST['observacoes']);
$cod_calibracao = utf8_decode($_POST['cod_calibracao']);
$data_aviso = utf8_decode($_POST['data_aviso']);
$status = utf8_decode($_POST['status']);


try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPSecure = "tls";
    //echo 'SMTP secure...<br/>';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->Port = 587;
    $mail->setFrom('');
    $mail->addAddress('');
    $mail->addAddress('');
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    $mail->isHTML(true);
    $mail->Subject = 'equipamento do Laboratorio'; 
    $mail->Body = "nome do equipamento = $nome_equipamento, <br> 
    fabricante = $fabricante, <br> 
    modelo = $modelo, <br> 
    certificado = $certificado, <br> 
    descricao = $descricao, <br> 
    data de Calibracao = $data_calibracao, <br> 
    observacoes = $observacoes, <br> 
    codigo de calibracao = $cod_calibracao, <br> 
    data de aviso =  $data_aviso, <br> 
    status = $status";
    
    $mail->AltBody = "teste_email";
    
//  echo 'SMTP send...<br/>';
    if($mail->send()) {
         print "<script>alert('E-mail Enviado')</script>";
        
    } else {
        print "<script>alert('E-mail não Enviado')</script>";
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

}else{

    print"Equipamento Todos Calibrados";
}

 ?>
