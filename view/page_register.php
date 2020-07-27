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

	
		<div class="col-md-4">
			
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