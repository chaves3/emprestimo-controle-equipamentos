<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deletar Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">

		<style type="text/css">
   
    body{
    
        background: rgb(245,245,245);
    
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
    <div class="centro"> 
	
	<form method="POST" action="deletar_emprestimos.php">  
  
  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Id:</label>
    <input type="int" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" placeholder="" required value="<?php print $consulta['id']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>
	  
	   <button type="submit" class="btn btn-danger m-3 cor">Deletar</button>

	</form>
</div>




<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

