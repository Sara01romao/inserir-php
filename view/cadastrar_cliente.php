<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Cadastrar Cliente</title>
</head>
<body>
    
<div class="container" style= "margin-top: 60px;
    width: 500px;" >

<h2 class="text-center">Cadastrar Cliente <i class="fa fa-user-plus"></i></h4>
<hr>


<form action="../controller/_add_cliente.php" method="post" style= " margin-top: 20px;">
<div class="form-group">
    <label >Nome</label>
    <input type="text" class="form-control" name="nome"  placeholder="Nome completo" autocomplete="off" required>
  </div>

  
  <div class="form-group">
    <label >RG</label>
    <input type="text" class="form-control" id= "rg" name="rg" required>
  </div>

  <div class="form-group">
    <label >CPF</label>
    <input type="text" class="form-control" id= "cpf" name="cpf" required>
  </div>



  <script>

        function validarForm() { 
                var optionSelect = document.getElementById("tipo").value;
                
                if(optionSelect =="Aluno" ){ 
                    
                    document.getElementById("curso").disabled = false;

                }else{
                    document.getElementById("curso").value ='';
                    document.getElementById("curso").disabled = true;
                    
                }

            }
            //verificar select option tipo e bloquear cursos
</script> 


  <div class="form-group">
    <label >Tipo</label>
    <select class="custom-select" name="tipo" id="tipo" onchange="validarForm()" required>
                <option value="" disabled="" selected>selecione o tipo</option>
                <option value="Aluno">Aluno</option>
                <option value="Colaborador">Colaborador</option>
                <option value="Professor">Professor</option>
        </select>
  </div>

  

  <div class="form-group">
    <label >Curso</label>
    <select class="custom-select" name="curso" id="curso" disabled >
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
				
  Cadastrar <i class="fa fa-plus"></i>

			</button><br><br>
  
  
</form>


<a href="lista_cliente.php">	<i class="fa fa-chevron-left"></i> Voltar Para Lista</a>
<a href="../index.php" style="float: right; margin-bottom: 20px;">	<i class="fa fa-chevron-left"></i> Voltar para Home</a>

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