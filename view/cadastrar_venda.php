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
    
<div class="container" id="tamanho" >

<h2 class="text-center">Cadastrar Venda <i class="fa fa-shopping-cart"></i></h4>
<hr>


 <form action="../controller/_add_venda.php" method="post"> 
<div class="form-group">
  <div>
  <label >Nome</label>
  <select name="idCliente" class="custom-select">
                    <option>Selecione</option>
                    <?php
                      $sql = "SELECT * FROM cliente ";
                      $resultado_servicos = mysqli_query($conexao, $sql);
                      while($row_servico = mysqli_fetch_assoc($resultado_servicos)){ ?>
                        <option value="<?php echo $row_servico['id']; ?>"><?php echo $row_servico['nome']; ?></option> <?php
                      }
                    ?>
                  </select><br><br>


    
  </div>
<br>
  
  <fieldset id="schedule-items" style="border: 1px solid red;" >
  <legend>Serviços
 
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
            <input type="text" class="form-control" name="quantidade"  placeholder="Nome completo" autocomplete="off" required>
          
        
        </div>

        
                     
      <br>
        
        
   </div>

 
  </fieldset>
  
  



  
  <button class="btn btn-success btn-sm" style= "margin-top: 10px;">
				
  Cadastrar <i class="fa fa-plus"></i>

			</button><br><br>
  
  
</form>


<a href="lista_venda.php">	<i class="fa fa-chevron-left"></i> Voltar</a>

</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></body>



	


    
</body>
</html>