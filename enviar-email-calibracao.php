
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enviar E-mail de Vencimento de Calibração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
   
    <style type="text/css">
    body{
    
        background: rgb(245,245,245);
    
       }



            .cor{
        
       background: orange; 
       	
       }

       .cor:hover{

       	 background: black;
       }
    
    
    
    </style>


</head>


<?php 
include_once("conexao.php");

$id = $_GET['id']  ?? '';

$sql = "SELECT * FROM novo WHERE id = $id";

$exibirRegistros = mysqli_query($conexao, $sql);


$consulta = mysqli_fetch_assoc($exibirRegistros);


?>



<body>

	
	<form method="POST" action="email-calibracao-vencimento.php">  
  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Id:</label>
    <input type="int" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" placeholder="" required value="<?php print $consulta['id']; ?>" >
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Nome do equipamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_equipamento" placeholder="" required  value="<?php print $consulta['nome_equipamento'];?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

   <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Fabricante:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="fabricante" placeholder="" value="<?php print $consulta['fabricante']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Modelo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="modelo" placeholder=""  value="<?php print $consulta['modelo']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Certificado:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="certificado" placeholder="" value="<?php print $consulta['certificado']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>


    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Descrição:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="descricao" placeholder="" value="<?php print $consulta['descricao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data de calibração:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_calibracao" required placeholder="" value="<?php print $consulta['data_calibracao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Nota fiscal orc:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="nf_orc" placeholder="" value="<?php print $consulta['nf_orc']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Observações:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="observacoes" placeholder=""  value="<?php print $consulta['observacoes']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Código calibracao:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_calibracao" required placeholder="" value="<?php print $consulta['cod_calibracao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>


   <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data aviso:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_aviso" placeholder="" value="<?php print $consulta['data_aviso']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>



  
  <div class="m-3">
  <label for="exampleInputEmail1" class="form-label m--5">Status:</label>
  <select class="form-select  w-50 h-50" aria-label="Default select example" name="status">
  <option selected>Escolha uma opção</option>
  <option value="nao-disponivel">Não disponível</option>
  <option value="disponivel">Disponível</option>
</select>
</div>

  <button type="submit" class="btn btn-primary m-3 cor">Enviar</button>

	</form>





<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
