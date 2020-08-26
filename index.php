<?php include_once 'view/dependencias.php'; ?>



<h2 class="text-center" >
	Bem-Vindo! <i class="fa fa-door-open"></i>
</h2><hr>

<form method="POST" action="">
	
<div class="container" >
	<div class="form-row">
		<h3> Informar itens para abertura do caixa</h3>
		
		
		
		

		<div class="col-md-8">
		<br>
			Adicionar valor: <i class="fa fa-money-check-alt"></i>
			
			<input class="form-control" type="text" name="vAbertura" required id="abert"><br>
		</div>

	
		<div class="col-md-6">
			<br>
			<button class="btn btn-primary btn-lg">
				
				Inserir Valor <i class="fa fa-file-invoice-dollar"></i>

			</button><br><br>

			

		</div>

	</div>
</div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#abert").mask("R$ 0000,00");
		
	});
</script>