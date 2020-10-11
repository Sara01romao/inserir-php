<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Lista de Fechamento</title>
</head>
<body>


<div class="container" style="margin-top: 50px; width: 800px;">

<h2 class="text-center">
		Lista de Fechamentos <i class="fa fa-list"></i>
	</h2>


<h5 class="text-right">
		<a href="./cadastrar_fechamento.php" class="btn btn-primary btn-xs"> Adicionar
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      
      <th scope="col" >Ação</th>
    </tr>
  </thead>
 
   
        <?php
                include '../conexao/conexao.php';
                $sql= "SELECT * FROM `fechamento` ORDER BY data DESC";
                $busca = mysqli_query($conexao, $sql);

                while ($array= mysqli_fetch_array($busca)){
                    $id= $array['id'];
                    $valor= $array['valor'];
                    $data= $array['data'];
    
        ?>
        <tr> 
            <td><?php echo $id ?></td>
            <td><?php echo $valor ?></td>
            <td><?php echo $data ?></td>
          
            <td><a class="btn btn-warning btn-sm" href="editar_fechamento.php?id=<?php echo $id?>" role="button"><i class="fa fa-edit"></i> &nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar este registro?')" href="../controller/deletar_fechamento.php?id=<?php echo $id?>" role="button"><i class="fa fa-trash"></i> &nbsp;Excluir</a>
            </td>
        </tr>
        <?php } ?>
   
    
  
</table>



</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>