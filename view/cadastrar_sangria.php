<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Cadastrar Sangria</title>
</head>
<body>
    
<div class="container" style= "margin-top: 60px;
    width: 500px;" >

<h2 class="text-center">Cadastrar Sangria <i class="fa fa-user-plus"></i></h4>
<hr>


<form action="../controller/_add_sangria.php" method="post" style= " margin-top: 20px;">

  
  <div class="form-group">
    <label >Valor</label>
    <input type="text" class="form-control" id= "valor" name="valor" required>
  </div>

 



  
  
  <button class="btn btn-success btn-sm">
				
  Cadastrar <i class="fa fa-plus"></i>

			</button><br><br>
  
  
</form>


<a href="lista_cliente.php">	<i class="fa fa-chevron-left"></i> Voltar</a>

</div>






<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#valor").mask("0000,00",  {reverse: true});
		
	});
</script>

    
</body>
</html>