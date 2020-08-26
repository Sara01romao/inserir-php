<?php include_once 'dependencias.php'; ?>


<h2 class="text-center">
	Registrar Cliente <i class="fa fa-user-plus"></i>
</h2><hr>

<form method="POST" action="../controller/insert_client.php">
	
<div class="container" >
	<div class="form-row">
		
		<div class="col-md-12">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="nome" required autofocus><br>
		</div>

		<div class="col-md-6">
			RG: <i class="fa fa-envelope"></i>
			<input class="form-control" type="text" name="rg" required id="rg"><br>
		</div>

		<div class="col-md-6">
			CPF: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="cpf" required id="cpf"><br>
		</div>

		<div class="col-md-6">
		<label >Tipo</label>
		<select  name="tipo" id="tipo" class="form-control" required>
			<option value="" disabled="" selected>Selecione uma opção </option>
			<option value="Aluno">Aluno</option>
			<option value="Colaborador">Colaborador</option>
			<option value="Professor">Professor</option>
		</select>
		<br>
    	</div>

		
		<div class="col-md-6">
	
		<label for="curso">Curso</label>
		
		<select required name="curso" class="form-control">
			<option value="" disabled="" selected>Selecione uma opção </option>
			<option value="Agronegócio- Noturno">Agronegócio- Noturno</option>
			<option value="Análise e Desenvolvimento de Sistemas- Manhã">Análise e Desenvolvimento de Sistemas- Manhã</option>
			<option value="Análise e Desenvolvimento de Sistemas- Noturno">Análise e Desenvolvimento de Sistemas- Noturno</option>
			<option value="Eventos- Noturno">Eventos- Noturno</option>
			<option value="Gestão Empresarial- Noturno">Gestão Empresarial- Noturno</option>
			<option value="Produção Agropecuária- Manhã">Produção Agropecuária- Manhã</option>
			
		</select>
    	</div>

		<div class="col-md-4">
		<br>
			<button class="btn btn-primary btn-lg">
				
				Inserir Cliente <i class="fa fa-user-plus"></i>

			</button><br><br>

			<a href="cliente.php">
				Voltar
			</a>

		</div>

	</div>
</div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
		$("#rg").mask("00.000.000-0");
	});
</script>