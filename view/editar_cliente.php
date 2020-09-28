<?php
 include '../conexao/conexao.php';
 
 $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <title>Document</title>
    
    <!-- icones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container" id="tamanho" >

<h2 class="text-center">
 Editar Cliente <i class="fa fa-user-edit"></i>
</h2><hr>


<form action="../controller/_edit_cliente.php" method="post">

<?php

        $sql= "SELECT * FROM `cliente` WHERE id = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){
            
            $id= $array['id'];
            $nome= $array['nome'];
            $rg= $array['rg'];
            $cpf= $array['cpf'];
            $tipo= $array['tipo'];
            $curso= $array['curso'];
        

?>




<div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" name="nome"  value= "<?php echo $nome ?>">
    <input type="number" class="form-control" name="id"  value= "<?php echo $id ?>" style= "display: none">
  </div>

  
  <div class="form-group">
    <label >RG</label>
    <input type="text" class="form-control" id= "rg" name="rg" value= "<?php echo $rg ?>" required>
  </div>

  <div class="form-group">
    <label >CPF</label>
    <input type="text" class="form-control" id= "cpf" name="cpf" value= "<?php echo $cpf ?>" required>
  </div>



  <script>

        function validarForm() { 
                var optionSelect = document.getElementById("tipo").value;
                
                if(optionSelect !="Aluno" ){ 
                    document.getElementById("curso").value ='';
                    document.getElementById("curso").disabled = true;

                }else{
                    
                    document.getElementById("curso").disabled = false;
                    
                }

            }
            //verificar select option tipo e bloquear cursos
</script> 


  <div class="form-group">
    <label >Tipo</label>
    <select class="custom-select" name="tipo" id="tipo" onchange="validarForm()"  required>
    <option value="" disabled="" selected>selecione o tipo</option>
                <option value="Aluno">Aluno</option>
                <option value="Colaborador">Colaborador</option>
                <option value="Professor">Professor</option>
        </select>
  </div>

  

  <div class="form-group">
    <label >Curso</label>
    <select class="custom-select" name="curso" id="curso" required  >
      <option  value="" disabled="" selected>selecione o curso</option>
      <option value="Agronegócio- Noturno">Agronegócio- Noturno</option>
			<option value="Análise e Desenvolvimento de Sistemas- Manhã">Análise e Desenvolvimento de Sistemas- Manhã</option>
			<option value="Análise e Desenvolvimento de Sistemas- Noturno">Análise e Desenvolvimento de Sistemas- Noturno</option>
			<option value="Eventos- Noturno">Eventos- Noturno</option>
			<option value="Gestão Empresarial- Noturno">Gestão Empresarial- Noturno</option>
			<option value="Produção Agropecuária- Manhã">Produção Agropecuária- Manhã</option>
        </select>
  </div>



  <button class="btn btn-success btn-sm">
				
  Salvar alteração <i class="fa fa-edit"></i>

			</button>
  
  
        <?php }?>
</form>
<br>
<a href="lista_cliente.php">	<i class="fa fa-chevron-left"></i> Voltar</a>


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