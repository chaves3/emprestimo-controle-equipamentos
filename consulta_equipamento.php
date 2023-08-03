
<?php

include_once("conexao.php");

if(isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time())  . $extensao;
    $dirtetorio = "comprovante/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dirtetorio.$novo_nome);
}


$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM novo WHERE nome_equipamento like '%$filtro%' ORDER BY id";
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
        font-family: "Times New Roman", Times, sans-serif;
        font-size: 15px;
    
       }
       

    table {
      border-collapse: collapse;
      width: 20%;
      color: black;
      border-radius: 10px;

       }

       th {

      background-color: white;

       }

       th td {

         border: 1px solid black;
         padding: 5px;
       }

       
    
    </style>


</head>
<body>

  <div class="container">

  <section>
      <h1>Consultas</h1>
      <hr><br><br>

      <form method="GET" action="consulta_equipamento.php">
        Filtrar por  Nome do Equipamento: <input type="text" name="filtro" required autofocus>
        <input type="submit" value="Pesquisar" class="btn btn-dark">
                 

      </form>

      <?php

      

      print "Resultado da Pesquisa Pelo Nome do Equipamento <strong>$filtro</strong>.<br><br>";

        print "$registros registros encontrados &nbsp <br><br>";

            
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
              $comprovante = $exibirRegistros[12];
              

             
              $DateAndTime = date('Y-m-d');
             
              $data_timestamp1 = new DateTime($data_calibracao);
              $data_timestamp2 = new DateTime($data_aviso);
              $data_timestamp3 = new DateTime($DateAndTime);

              

              if ($data_timestamp3 > $data_timestamp1) {
                 

              $color = 'yellow';
              
              $sql2 = "UPDATE novo SET status  = 'Equipamento Precisa Calibrar' WHERE id = $id";
              
              $consulta2 = mysqli_query($conexao,$sql2);
             
                
              
                                    
                           
                       
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
              
              print "<table class='table table-striped-columns'>";
                  
              print  "<tr>";          
                    
                 print   "<th>Id</th>";
                 print   "<th>Nome do E</th>";
                 print   "<th>FABRICANTE</th>";
                 print   "<th>MODELO</th>";
                 print   "<th>CERTIFICADO</th>";
                 print   "<th>DESCRIÇÃO</th>";
                 print   "<th>DATA DE CALIBRAÇÃO</th>";
                 print   "<th>NOTA FISCAL</th>"; 
                 print   "<th>OBSERVAÇÕES</th>";
                 print   "<th>CÓDIGO DE CALIBRAÇÃO</th>";
                 print   "<th>DATA_AVISO</th>";
                 print   "<th>STATUS</th>";
                 print   "<th>COMPROVANTE</th>";
                 print   "<th>EDITAR</th> ";
                 print   "<th>DELETAR</th>";
                 print   "<th>ENVIAR E-MAIL</th>"; 
                                                    
                   
                  print  "</tr>";
                  
                  

              print"<tr style='background-color: $color'>";
                    
                   print"<td>$id</td>";
                   print"<td>$nome_equipamento</td>";
                   print "<td>$fabricante</td>";
                   print "<td>$modelo</td> ";
                   print "<td>$certificado</td>";
                   print "<td>$descricao</td>";
                   print "<td>$data_calibracao</td>";
                   print "<td>$nf_orc</td>";
                   print "<td>$observacoes</td>";
                   print "<td>$cod_calibracao</td>";
                   print "<td>$data_aviso</td>";
                   print "<td>$status</td> ";
                   print "<td><a href = 'comprovante/$comprovante'>$comprovante</a></td> ";
                   
                   print "<td>

                    <button onclick=\"location.href='atualizar.php?id=$id';\" class = 'btn btn-success'>EDITAR</button>
                    
                     </td>";          

                  
                   print"<td>
                    <button  onclick=\"location.href='deletar_equipamento.php?id=$id';\"class ='btn btn-danger'>EXCLUIR</button>
                    </td>";

                  
                   print"<td>

                    <button onclick=\"location.href='enviar-email-calibracao.php?id=$id';\" class = 'btn btn-primary'>ENVIAR</button>
                    
                     </td>"; 

                                 
                    
                 print"</tr>";

              
             
             print"</table> ";
              

              
            


              print "</article>";
            
            }

            mysqli_close($conexao);
  



    
 
 
      ?>
      
                

      

    </section>
  
  </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>