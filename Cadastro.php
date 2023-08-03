
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Cadastro</title>

	    <style type="text/css">
    body{
    
        background: rgb(245,245,245);
    
       }

       select{

       	width: 180px; 

       	height: 20px;
       
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

<form method="POST" action="enviar_cadastro.php">
  <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Equipamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="equipamento" placeholder="" required>
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Quantidade:</label>
    <input type="int" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantidade" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Ativo Fixo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="ativo" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Código Calibração:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo_calibracao" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Departamento:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="departamento" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label"> Data Retirada:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_retirada" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Data devolução:</label>
    <input type="date" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_devolucao" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Responsável pelo empréstimo:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="responsavel_pela_liberacao" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label"> Email responsável pelo empréstimo:</label>
    <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_responsavel" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Responsável devolução:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="responsavel_devolucao" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Email responsável pela devolução:</label>
    <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_destinado" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>

    <div class="m-3">
    <label for="exampleInputEmail1" class="form-label">Observações:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="observacoes" placeholder="">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="m-3">
  <label for="exampleInputEmail1" class="form-label m--5">Status:</label>
  <select class="form-select  w-50 h-50" aria-label="Default select example" name="status">
  <option selected>Escolha uma opção</option>
  <option value="emprestado">Emprestado</option>
  <option value="disponivel">Devolvido</option>
</select>
</div>

  <button type="submit" class="btn btn-primary m-3 cor">Enviar</button>
</form>

       

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

