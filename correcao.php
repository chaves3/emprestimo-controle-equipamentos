
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Correção</title>

   		<style type="text/css">
   
    body{
    
        background: rgb(245,245,245);


    
       }

       .cor{

       	 background: black;
       }


       .cor:hover{

       	 background: orange;
       }

       .cor:click{

       	 background:rgba(210, 105, 30, 1) ;
       }
    
    </style>

</head>

<?php 

include_once("conexao.php");

$id = $_GET['id']  ?? '';

$sql = "SELECT * FROM cadastro WHERE id = $id";

$exibirRegistros = mysqli_query($conexao, $sql);


$consulta = mysqli_fetch_assoc($exibirRegistros);


?>

<body>

<form method="POST" action="correcao2.php">
  

   <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Id:</label>
    <input type="id" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" placeholder="" required value="<?php print $consulta['id']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div> 

  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Equipamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="equipamento" placeholder="" required value="<?php print $consulta['equipamento']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Quantidade:</label>
    <input type="int" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantidade" placeholder="" value="<?php print $consulta['quantidade']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Ativo Fixo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="ativo" placeholder="" value="<?php print $consulta['ativo']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Código Calibração:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_calibracao" placeholder="" value="<?php print $consulta['cod_calibracao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Departamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="departamento" placeholder="" value="<?php print $consulta['departamento']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label"> Data Retirada:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_retirada" placeholder="" value="<?php print $consulta['data_retirada']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data devolução:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_devolucao" placeholder="" value="<?php print $consulta['data_devolucao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data Real:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_real" placeholder="" value="<?php print $consulta['data_real']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Responsável pelo empréstimo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="responsavel_liberacao" placeholder="" value="<?php print $consulta['responsavel_liberacao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label"> Email responsável pelo empréstimo:</label>
    <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_responsavel" placeholder="" value="<?php print $consulta['email_responsavel']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Responsável devolução:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="responsavel_devolucao" placeholder="" value="<?php print $consulta['responsavel_devolucao']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Email responsável pela devolução:</label>
    <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_destinado" placeholder="" value="<?php print $consulta['email_destinado']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Observações:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="observacoes" placeholder="" value="<?php print $consulta['observacoes']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="m-3">
  <label for="exampleInputEmail1" class="form-label m--5">Status:</label>
  <select class="form-select  w-50 h-50" aria-label="Default select example" name="status">
  <option selected>Escolha uma opção</option>
  <option value="emprestado">Emprestado</option>
  <option value="devolvido">devolvido</option>
</select>
</div>

  <button type="submit" class="btn btn-primary m-3 cor">Enviar</button>
</form>
	
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>





