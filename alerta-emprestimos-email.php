


<?php 


if (isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') {
    $url="https://";
}else{
 
   $url="http://";
   $url.=$_SERVER['HTTP_HOST'];
   $url.=$_SERVER['REQUEST_URI'];
   $url;
}

$page=$url;
$sec="3000000";




 ?>

<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="refresh" content="<?php print $sec; ?>" URL="<?php print $page; ?>" >
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <title></title>
 </head>
 <body>
 
 </body>
 </html>



<?php 

include_once("conexao.php");

require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;


$sql = "SELECT * FROM `cadastro` WHERE CURDATE() > data_devolucao AND status <> 'devolvido' ";

$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


        while($exibirRegistros = mysqli_fetch_array($consulta)) {
          
           

              $id = $exibirRegistros[0];
              $equipamento = $exibirRegistros[1];
              $quantidade = $exibirRegistros[2];
              $ativo = $exibirRegistros[3];
              $cod_calibracao = $exibirRegistros[4];
              $departamento = $exibirRegistros[5];
              $data_retirada = $exibirRegistros[6];
              $data_devolucao = $exibirRegistros[7];
              $data_real = $exibirRegistros[8];
              $responsavel_liberacao = $exibirRegistros[9];
              $email_responsavel = $exibirRegistros[10];
              $responsavel_devolucao = $exibirRegistros[11];
              $email_destinado =  $exibirRegistros[12];
              $observacoes = $exibirRegistros[13];
              $status = $exibirRegistros[14];

                      

$mail = new PHPMailer(true);


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
    $mail->CharSet = "UTF-8";
    $mail->setFrom('laboratoriodevalidacao@gmail.com');
    $mail->addAddress($email_destinado);
    $mail->addAddress($email_responsavel);
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    $mail->isHTML(true);
    $mail->Subject = 'Empréstimo do Equipamento do Laboratório Passou da data de devolução';
    $mail->Body = " <meta charset='utf-8'> Equipamento = $equipamento <br>
     Quantidade = $quantidade <br>
     Ativo = $ativo <br>
     Código de calibração = $cod_calibracao <br>
     Departamento = $departamento <br>
     Data de retirada = $data_retirada <br>
     Data de devolução = $data_devolucao <br>     
     Data real da devolução = $data_real <br>
     Responsavel pela liberação = $responsavel_liberacao <br>
     E-mail do responsavel pela liberação = $email_responsavel <br>
     
     Responsavel pela devolução = $responsavel_devolucao <br>

     E-mail do destinado = $email_destinado <br>

     Observações = $observacoes <br>

     Status = $status"; 
    
    $mail->AltBody = "Emprestimo do Equipamento";
    
//  echo 'SMTP send...<br/>';
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

}


 ?>

