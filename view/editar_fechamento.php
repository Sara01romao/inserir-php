<?php
 include '../conexao/conexao.php';
 
 $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura</title>
</head>
<body>


  <div class="container" style= "margin-top: 60px;
    width: 550px;" >

<h2 class="text-center">Edita Fechamento <i class="fa fa-edit"></i></h4>
<hr>



<form action="../controller/_edit_fechamento.php" method="post" style= " margin-top: 20px;">
<?php

        $sql= "SELECT * FROM `fechamento` WHERE id = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){
            
            $id= $array['id'];
            $valor= $array['valor'];
            $data= $array['data'];
           
        

?>




<h4>Informe o valor de Fechamento</h4><br>
<div class="form-group">
                <label for="">Adicionar valor: <i class="fa fa-money-check-alt"></i></label><br>
                
			
			<input class="form-control" type="text" name="valor"  id= "valor" value= "<?php echo $valor ?>" autocomplete="off" required>
            <input type="number" class="form-control" name="id"  value= "<?php echo $id ?>" style= "display: none">
   
  </div>

 
 

  <button class="btn btn-primary btn-sm"onclick="return confirm('Tem certeza que deseja editar este registro?')">
  
				
  Salvar alteração  <i class="fa fa-file-invoice-dollar"></i> 

			</button>
            <?php }?>


</form>
<br>

<a href="lista_fechamento.php">	<i class="fa fa-chevron-left"></i> Voltar</a>
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