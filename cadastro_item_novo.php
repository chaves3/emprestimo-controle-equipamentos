
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro De Emprestimos</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">

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
<body>

<br>
<form method="POST" action="cadastro_item_novo_cadastro.php" enctype="multipart/form-data">
  
  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Nome do equipamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_equipamento" placeholder="" required>
    <div id="emailHelp" class="form-text"></div>
  </div>

   <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Fabricante:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="fabricante" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Modelo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="modelo" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Certificado:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="certificado" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>


    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Descrição:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="descricao" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data de calibração:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_calibracao"  placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Nota fiscal orc:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="nf_orc" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Observações:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="observacoes" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Código calibracao:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_calibracao" required placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>


   <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data aviso:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_aviso" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>



  
<div class="m-3">
  <label for="exampleInputEmail1" class="form-label m--5">Status:</label>
  <select class="form-select  w-50 h-50" aria-label="Default select example" name="status">
  <option selected>Escolha uma opção</option>
  <option value="nao-disponivel">Não disponível</option>
  <option value="disponivel">Disponível</option>
  <option value="disponivel">Reprovado</option>
</select>
</div>

<div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Comprovante:</label>
    <input type="file" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="arquivo" placeholder="">
    <div id="emailHelp" class="form-text"></div>
</div>



  <button type="submit" class="btn btn-primary m-3 cor">Enviar</button>
</form>


    

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
