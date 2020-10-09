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
    <title>Sangria</title>
</head>
<body>


<div class="container" style= "margin-top: 60px;
    width: 500px;" >

<h2 class="text-center">Edita Sangria <i class="fa fa-edit"></i></h4>
<hr>


<form action="../controller/_edit_sangria.php" method="post" style= " margin-top: 20px;">

<?php

        $sql= "SELECT * FROM `sangria` WHERE id = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){
            
            $id= $array['id'];
            $valor= $array['valor'];
            $dh= $array['dh'];
        

?>
  
  <div class="form-group">
    <label >Valor</label>
    <input type="text" class="form-control" id= "valor" name="valor" value= "<?php echo $valor ?>" required>
    <input type="number" class="form-control" name="id"  value= "<?php echo $id ?>" style= "display: none">
   
  </div>

 



  
  
  <button class="btn btn-success btn-sm" onclick="return confirm('Tem certeza que deseja editar este registro?')" >
				
  Salvar alteração <i class="fa fa-plus"></i>

			</button><br><br>
 <?php }?>
  
</form>

	

<br>

<a href="lista_sangria.php">	<i class="fa fa-chevron-left"></i> Voltar</a>
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