<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Cadastrar Venda</title>
</head>
<body>
    
<div class="container" style= "margin-top: 60px;
    width: 500px;" >

<h2 class="text-center">Cadastrar Venda <i class="fa fa-shopping-cart"></i></h4>
<hr>

<!-- <h2 class="text-center">Cadastrar Venda <i class="fa fa-shopping-cart"></i></h4>
<hr>


<form action="../controller/_add_cliente.php" method="post" style= " margin-top: 20px;">
<div class="form-group">
<h5 class="text-right">
		<a href="./cadastrar_cliente.php" class="btn btn-primary btn-xs"> Adicionar 
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
    <label >Buscar cliente</label>
  
    <form class="form-inline my-2 my-lg-0" >
   
      <input class="form-control mr-sm-2" name="nome"  placeholder="Nome completo" autocomplete="off" required>
      <button class="btn btn-outline-success my-2 my-xs-0" type="submit">Pesquisar</button>
    </form>
  </div>
  <hr>
  
  <div class="form-group">
  
    <label >Serviço</label>
    <select class="custom-select" name="tipo" id="tipo" onchange="validarForm()" required>
                <option value="" disabled="" selected>selecione o tipo</option>
                <option value="Aluno">Aluno</option>
                <option value="Colaborador">Colaborador</option>
                <option value="Professor">Professor</option>
        </select>
  </div>
  <div class="form-group">

  
    <label >Quantidade</label>
    <input type="text" class="form-control" id= "qtd" name="qtd" required>
  </div>

  



  
  
  <button class="btn btn-success btn-sm">
				
  Confirmar <i class="fa fa-check"></i>

			</button><br><br>
  
  
</form> -->

<form>
<h5 class="text-right">
		<a href="./cadastrar_cliente.php" class="btn btn-primary btn-xs"> Adicionar 
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
  <div class="form-row">
  
    <div class="form-group col-md-12">
      <label for="">Buscar Cliente</label>
      <input type="text" class="form-control" id="" placeholder="Informe RG">
    </div>

    
    
  <form class="border border-secondary"> 
  <div class="form-group col-md-9">
      <label for="">Serviço</label>
      <select id="" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-3">
      <label for="">Quantidade</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">+ serviço</button>
  
  </form>
  <br>


  <button type="submit" class="btn btn-primary">Entrar</button> <br>


</form>
<br>

<a href="lista_vendas.php">	<i class="fa fa-chevron-left"></i> Voltar</a>

</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></body>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
        $("#rg").mask("00.000.000-0");
		
	});

	
</script>

    
</body>
</html>