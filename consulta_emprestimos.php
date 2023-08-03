
<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM cadastro WHERE equipamento like '%$filtro%' AND status <> 'devolvido' ORDER BY id";
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






    </style>

</head>
<body>

  <div class="container">

  <section>
      <h1>Consultas</h1>
      <hr><br><br>

      <form method="GET" action="consulta_emprestimos.php">
        Filtrar por Equipamento: <input type="text" name="filtro" required autofocus>
        <input type="submit" value="Pesquisar" class="btn btn-dark">
                 

      </form>

      <?php

      print "Resultado da Pesquisa com o Equipamento <strong>$filtro</strong>.<br><br>";

        print "$registros registros encontrados";
            
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



              $DateAndTime = date('Y-m-d');
             
             

              $data_timestamp1 = new DateTime($data_retirada);
              $data_timestamp2 = new DateTime($data_devolucao);
              $data_timestamp3 = new DateTime($DateAndTime);

              

              if ($data_timestamp3 > $data_timestamp2) {
                  $color = 'red';
                          
                       
               }else {
                       
                  $color = 'white';
               }
              

               
              

              print "<article>";
              
              

              print "<table class='table table-striped-columns'>";
              print  "<thead>";
                    
              print  "<tr>";                    
              print   "<th>Id</th>";
              print   "<th>Equipamento</th>";
              print   "<th>Quantidade</th>";
              print   "<th>Ativo</th>";
              print   "<th>Cod de Calibracao</th>";
              print   "<th>Departamento</th>";
              print   "<th>Data de Retirada</th>";
              print   " <th>Data de Devolução</th>";
              print   "<th>Data Real</th>";
              print   "<th>Responsavel pelo Empréstimo</th>";
              print   "<th>E-email Responsavel</td>";
              print   "<th>Responsavel pela Retirada</th>";
              print   "<th>E-mail Destinado</th>";
              print   "<th>Observações</th>";
              print   "<th>Status</th>";
              print   "<th>Editar</th>";
              print  "<th>Deletar</th>";
              print  "<th>Enviar E-mail</th>";

                    
                    
                    
               print "</tr>";

               print  "</thead>";

               print "<tbody>";
                       
               print "<tr style='background-color: $color;'>";
                    
                  print  "<td>$id</td>";
                  print  "<td>$equipamento</td>";
                  print  "<td>$quantidade</td>";
                  print "<td>$ativo</td>";
                  print"<td>$cod_calibracao</td>";
                  print"<td>$departamento</td>";
                  print "<td>$data_retirada</td>";
                  print"<td>$data_devolucao</td>";
                  print"<td>$data_real</td>";
                  print "<td>$responsavel_liberacao</td>";
                  print"<td>$email_responsavel</td>";
                  print"<td>$responsavel_devolucao</td>";                    
                  print "<td>$email_destinado</td>";
                  print"<td>$observacoes</td>";
                  print"<td>$status</td>";
                  print "<td>
                   
                  <button onclick=\"location.href='correcao.php?id=$id';\" class = 'btn btn-success'>EDITAR</button>                                       
                          </td>";        

                  
                   print  "<td>
                  <button  onclick=\"location.href='deletar.php?id=$id';\"class ='btn btn-danger'>EXCLUIR</button>
                    </td>";
                    
                    
                   print" <td>
                         <button onclick=\"location.href='enviar-cobranca-emprestimos.php?id=$id';\"class = 'btn btn-primary'>ENVIAR</button>
                    </td>";
                   
                  print "</tr>";

                print "</tbody>";

              

              print"</table>";

              
            


              print "</article>";
            
            }

            mysqli_close($conexao);
             
      ?>
      
                

      

    </section>
  
  </div>

</body>
</html>