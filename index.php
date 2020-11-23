<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'view/dependencias.php'; ?>
	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>

<header style="height:75px; background-color: #e6ffff; border-bottom:1px solid #e6f2ff; margin-bottom: 80px;" >
<h1 style="font-size: 35px; padding: 10px 40px">Centro de Cópias <i class="fa fa-print" ></i></h1>
  
</header>



<div class="row">
  <div class="col-sm-6">
    <div class="card" style="margin: 0px 10px 20px 10px;" >
      <div class="card-body" >
        <h3 class="card-title" style="background:#f0f5f5; ">Venda</h3>
        <br>
      
        <a href="view/lista_venda2.php" class="btn btn-primary" style="margin-right: 20px;" >Histórico de Vendas</a>
        <a href="view/cadastrar_venda2.php" class="btn btn-primary">Cadastrar Venda</a>
      </div>
    </div>
  </div>


  
  <div class="col-sm-6" >
    <div class="card" style="margin: 0px 10px 0px 10px;" >
      <div class="card-body">
        <h4 class="card-title" style="background:#f0f5f5; ">Cliente</h4>
        <br>
        <a href="view/lista_cliente.php" class="btn btn-primary" style="margin-right: 20px;">Lista de Clientes</a>
        <a href="view/cadastrar_cliente.php" class="btn btn-primary">Cadastrar Cliente</a>
      </div>
    </div>
  </div>
</div>


<br>



<div class="row">
  <div class="col-sm-12">
    <div class="card text-center" style="margin: 0px 10px 20px 10px;" >
      <div class="card-body" style="align-items: center;">
        <h3 class="card-title" style="background:#f0f5f5; ">Caixa</h3>
        <br>
      
        <a href="view/lista_abertura.php" class="btn btn-primary" style="margin: 0px  20px 20px 0px ;" > Abertura</a>
        <a href="view/lista_sangria.php" class="btn btn-primary" style="margin: 0px  20px 20px 0px ;" >Sangria</a>
        <a href="view/lista_fechamento.php" class="btn btn-primary" style="margin: 0px  20px 20px 0px;" >Fechamento</a>
        
        
      </div>
    </div>
  </div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>