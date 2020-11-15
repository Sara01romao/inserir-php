<?php
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="style.css">

     <!-- icones -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  <title>Cadastrar Cliente</title>
</head>
<body>
    <br>
<div class="container" id="tamanho" >

<h2 class="text-center">Cadastrar Venda <i class="fa fa-shopping-cart"></i></h4>
<hr>



 <form action="../controller/_add_venda2.php" method="post"> 
   
<br>
<h5 class="text-right">
		<a href="./cadastrar_cliente.php" class="btn btn-primary btn-xs"> Cadastrar Cliente
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
<div class="form-group">
<label >Selecionar  Cliente:</label><br>
<input type="search" name="idCliente" list="clientes" autocomplete="off" required style="border-radius: 5px;">
<datalist id="clientes" name="idCliente" >
                      <?php
                          
                          $sql = "SELECT * FROM cliente  WHERE nome LIKE '%$idCliente%'ORDER BY nome ASC";
                          $resultado_servicos = mysqli_query($conexao, $sql);
                        
                            while($row_servico = mysqli_fetch_assoc($resultado_servicos)){ ?>
                              <option value="<?php  echo $row_servico['id']; ?>">
                              <?php 
                                  echo 'NOME: '.$row_servico['nome'];
                                  echo ' | - TIPO: '.$row_servico['tipo'];
                                  echo ' | - Curso: '.$row_servico['curso'];
                               ?>
                              
                              </option> 
                              <?php
                            
                            }  
                            

                        ?>


</datalist>

</div>
<hr>

<br>
  
  <fieldset id="schedule-items" style="border: 1px solid black; padding: 10px;" >
  <legend >Serviços
 
  </legend>
  
  <div class="schedule-item">
        <div>
            <select name="servico" id="servico" class="custom-select">
                    <option>Selecione</option>
                    <?php
                      $sql = "SELECT * FROM servico";
                      $resultado_servicos = mysqli_query($conexao, $sql);
                      while($row_servico = mysqli_fetch_assoc($resultado_servicos)){ ?>
                        <option value="<?php echo $row_servico['id']; ?>"><?php echo $row_servico['nome']; ?></option> <?php
                      }
                    ?>
                  </select><br><br>

        </div>

        

        
        <div class="from-group">
          
            <label >Quantidade</label>
            <input type="text" class="form-control" name="quantidade"  placeholder="quantidade" autocomplete="off" required>
          
        
        </div>

        
                     
      <br>
        
        
   </div>

 
  </fieldset>
  
  



  
  <button class="btn btn-success btn-sm" style= "margin-top: 10px;">
				
  Cadastrar <i class="fa fa-plus"></i>

			</button><br><br>
  
  
</form>


<a href="lista_venda2.php">	<i class="fa fa-chevron-left"></i> Voltar</a>

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