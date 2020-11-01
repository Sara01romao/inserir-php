


<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Lista de Vendas</title>
</head>
<body>


<div class="container" style="margin-top: 60px;">

<h2 class="text-center">
		Lista de vendas <i class="fa fa-list"></i>
	</h2><br>

<h5 class="text-right">
		<a href="./cadastrar_venda.php" class="btn btn-primary btn-xs"> Adicionar
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Data</th>
      <th scope="col">Cliente</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Serviço</th>
      <th scope="col">Status</th>
      
      <th scope="col">Ação</th>
    </tr>
  </thead>
 
   
        <?php
                include '../conexao/conexao.php';
                $sql= "SELECT venda.id as vendaId, venda.data, cliente.nome as cliente, itens_venda.quantidade as quantidade, itens_venda.id,  servico.nome from `venda` INNER JOIN `cliente` on (venda.cliente_id= cliente.id) INNER JOIN `itens_venda` on (venda.id= itens_venda.id_venda) INNER JOIN `servico` on (itens_venda.id_servico= servico.id) ORDER BY id DESC";
                $busca = mysqli_query($conexao, $sql);

                while ($array= mysqli_fetch_array($busca)){
                   $vendaId= $array['vendaId'];
                    $id= $array['id'];
                     $data= $array['data'];
                     $cliente= $array['cliente'];
                     $quantidade= $array['quantidade'];
                     $servico= $array['nome'];
                     

                    

        ?>
        <tr> 
            <td><?php echo $vendaId ?></td>
            <td><?php echo $data ?></td>
            <td><?php echo $cliente ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $servico ?></td>
            <td><?php echo $id ?></td>
            <td></td>
             
            <td> <a class="btn btn-danger btn-sm" href="../controller/estorna_venda.php?id=<?php echo $id?>" role="button"><i class="fa fa-ban"></i> &nbsp;Excluir</a>

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