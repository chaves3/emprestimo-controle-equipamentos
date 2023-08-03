<?php 

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM novo WHERE data_calibracao like '%$filtro%' ORDER BY id";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>


<!DOCTYPE html>
<html>
<head>
  <title>cadastro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

      <style type="text/css">
   
    body{
    
        background: rgb(245,245,245);
    
       }
       
       table{
         border-style: hidden;

       }

       thead{

          background-color: rgb(235, 232, 232);
       }

       td{

          padding: 5px;
       }

    
    </style>


</head>
<body>

  <div class="container">

  <section>
      <h1>Consultas</h1>
      <hr><br><br>

      <form method="GET" action="vencimento.php">
        Filtrar Pela Data de Calibração: <input type="text" name="filtro" required autofocus>
        <input type="submit" value="Pesquisar" class=" btn btn-dark">
                 

      </form>

      <?php

      print "Resultado da Pesquisa Pela Data de calibração <strong>$filtro</strong>.<br><br>";

        print "$registros registros encontrados &nbsp";
            
        while($exibirRegistros = mysqli_fetch_array($consulta)) {
              
              $id = $exibirRegistros[0];
              $nome_equipamento = $exibirRegistros[1];
              $fabricante = $exibirRegistros[2];
              $modelo = $exibirRegistros[3];
              $certificado = $exibirRegistros[4];             
              $descricao = $exibirRegistros[5];
              $data_calibracao = $exibirRegistros[6];
              $nf_orc = $exibirRegistros[7];
              $observacoes = $exibirRegistros[8];
              $cod_calibracao = $exibirRegistros[9];              
              $data_aviso = $exibirRegistros[10];
              $status = $exibirRegistros[11];


                        
                           $DateAndTime = date('Y-m-d');
             
             
      
              $data_timestamp1 = new DateTime($data_calibracao);
              $data_timestamp2 = new DateTime($data_aviso);
              $data_timestamp3 = new DateTime($DateAndTime);

              

              if ($data_timestamp3 > $data_timestamp2) {
                 

                  $color = 'yellow';
                   
        
                       
               }else {
                       
                   $color = 'white';
               }


               if ($status == 'Reprovado') {
                   
                   $color = 'red';
               
               }


               if ($status == 'Manutenção') {
                   $color = 'orange';
               }

              

              

              print "<article>";
              
              print "<table class='table table-striped-columns'>
                  

                  <thead>
                   <tr>                    
                    
                    <td>ID</td>
                    <td>NOME DO EQUIPAMENTO</td>
                    <td>FABRICANTE</td>
                    <td>MODELO</td>
                    <td>CERTIFICADO</td>
                    <td>DESCRIÇÃO</td>
                    <td>DATA DE CALIBRAÇÃO</td>
                    <td>NF ORC</td>
                    <td>OBSERVAÇÕES</td>
                    <td>CÓDIGO DE CALIBRAÇÃO</td>
                    <td>DATA_AVISO</td>
                    <td>STATUS</td>                                                                             
                   <th>EDITAR</th> 
                   <th>DELETAR</th>
                   <th>ENVIAR E-MAIL</th>
               </tr>
                 </thead>

                  
                  <tbody>

                <tr style='background-color: $color;'>
                    
                    <td>$id</td>
                    <td>$nome_equipamento</td>
                    <td>$fabricante</td>
                    <td>$modelo</td> 
                    <td>$certificado</td>
                    <td>$descricao</td>
                    <td>$data_calibracao</td>
                    <td>$nf_orc</td>
                    <td>$observacoes</td>
                    <td>$cod_calibracao</td>
                    <td>$data_aviso</td>
                    <td>$status</td>

                     <td>

                    <button onclick=\"location.href='atualizar.php?id=$id';\" class = 'btn btn-success'>EDITAR</button>
                    
                     </td>         

                  
                   <td>
                    <button  onclick=\"location.href='deletar_equipamento.php?id=$id';\"class ='btn btn-danger'>EXCLUIR</button>
                    </td>

                  
                   <td>

                    <button onclick=\"location.href='enviar-email-calibracao.php?id=$id';\" class = 'btn btn-primary'>ENVIAR</button>
                    
                     </td> 

                                 
                                                       
                    
                   </tr>

                </tbody>
             
              </table> 
              ";

              
            


              print "</article>";
            
            }

            mysqli_close($conexao);
             
      ?>
      
                

      

    </section>
  
  </div>

</body>
</html>







