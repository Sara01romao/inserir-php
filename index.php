<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'view/dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura</title>
</head>
<body>
<h2 class="text-center" >
	Bem-Vindo! <i class="fa fa-door-open"></i>
</h2><hr>


	
<div class="container" style= "margin-top: 60px;
    width: 500px;" >



<form action="./controller/_add_abertura.php" method="post" style= " margin-top: 20px;">

<h4>Informe o valor de abertura</h4><br>
<div class="form-group">
                <label for="">Adicionar valor: <i class="fa fa-money-check-alt"></i></label><br>
                
			
			<input class="form-control" type="text" name="valor"  id= "valor" placeholder="00,00" autocomplete="off" required>
    
  </div>

 
	

	
  <button class="btn btn-primary btn-sm">
  
				
				Inserir Valor <i class="fa fa-file-invoice-dollar"></i> 

			</button>
</div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#valor").mask("0000,00",  {reverse: true});
		
	});
</script>
</body>
</html>