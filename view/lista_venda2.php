<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
	<?php include_once 'menu.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- icones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Lista Venda </title>
</head>
<body>


<div class="container" style="margin-top: 60px;">

<h2 class="text-center">
Lista Venda  <i class="fa fa-list"></i>
	</h2><br>

<h5 class="text-right">
		<a href="./cadastrar_venda2.php" class="btn btn-primary btn-xs"> Adicionar
			<i class="fa fa-shopping-cart"></i>
		</a>
	</h5>
<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">data</th>
      <th scope="col">Cliente</th>
      <th scope="col">Serviço</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Total</th>
      <th scope="col">Status Venda</th>
    
      
     
      <th scope="col">Ação</th>
    </tr>
  </thead>
 
   
        <?php
                include '../conexao/conexao.php';
                // $sql= "SELECT venda.id as vid, venda.data, venda.cliente_id, venda.id_servico, venda.item_id as id , venda.quantidade FROM `venda` ORDER BY vid DESC";

                $sql= "SELECT venda.id as vid, venda.data, cliente.nome as cliente, servico.nome as servico, venda.item_id as id , venda.quantidade, venda.quantidade * servico.preco as total
                FROM `venda` 
                INNER JOIN `cliente` on (venda.cliente_id=cliente.id)
                INNER JOIN `servico` on (venda.id_servico= servico.id) ORDER BY id DESC";


                $busca = mysqli_query($conexao, $sql);

                while ($array= mysqli_fetch_array($busca)){
                    $vid= $array['vid'];  
                    $data= $array['data'];
                    $cliente= $array['cliente'];
                    $servico= $array['servico'];
                    $id= $array['id'];
                    $quantidade= $array['quantidade'];
                    $total= $array['total'];
                    
                    if ($id==null){
                      $id= 'Venda Estornada';
                    }
                    

                    

        ?>

                
        <tr> 
            <td><?php echo $vid ?></td>
            <td><?php echo $data ?></td>
            <td><?php echo $cliente ?></td>
            <td><?php echo $servico ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $total ?></td>
            <td><?php echo $id ?></td>
            
            
            
            <td>
            <a class="btn btn-danger btn-sm" href="../controller/deletar_venda2.php?id=<?php echo $id?>" role="button"><i class="fa fa-ban"></i> &nbsp;Estorna</a>
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