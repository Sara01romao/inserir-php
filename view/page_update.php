<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once 'dependencias.php'; 

$manager = new Manager();

$id = $_POST['id'];




?>

<h2 class="text-center">
	Alterar Cliente <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">
	
<div class="container">
	<div class="form-row">
		
		<?php foreach($manager->getInfo("cliente", $id) as $client_info): ?>

		<div class="col-md-12">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="nome" required autofocus value="<?=$client_info['nome']?>"><br>
		</div>


		<div class="col-md-6">
			RG: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="rg" required id="rg" value="<?=$client_info['rg']?>"><br>
		</div>

		<div class="col-md-6">
			CPF: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="cpf" required id="cpf" value="<?=$client_info['cpf']?>"><br>
		</div>

		<!-- <div class="col-md-6">
		<label >Tipo</label>
		<select  name="tipo" id="tipo" class="form-control" required >
			<option value="" disabled="" selected>Selecione uma opção </option>
			<option value="Aluno">Aluno</option>
			<option value="Colaborador">Colaborador</option>
			<option value="Professor">Professor</option>
		</select>
		<br>
    	</div> -->

		

	

		<div class="col-md-6">
		<label >Tipo</label>
		
			<select name="tipo" class="form-control" require>
				<?php
					
					
					$listatipo = Array("Aluno", "Colaborador", "Professor");
					foreach($listatipo as $tipo){
					
						$selecionado = "";
						
						if($tipo == $client_info["tipo"]){
							$selecionado = "selected";

						}

			
						echo "<option value='{$tipo}' $selecionado>{$tipo}</option>";


					}
				?>
			</select>
			
			
		</div> 

					
				

      

					
					
					
					


		<div class="col-md-6">
		<label >Curso</label>
		
			<select name="curso" class="form-control" require >
				<?php
					// percorre as lista de níveis, criando um option para cada item;
					// quando o item for igual ao do cliente, então deixa ele selecionado (para
					// deixar o item selecionado, é só adicionar o atributo "selected" no option)
					
					$listacurso = Array("Agronegócio- Noturno", "Análise e Desenvolvimento de Sistemas- Manhã", "Análise e Desenvolvimento de Sistemas- Noturno", "Eventos- Noturno", "Gestão Empresarial- Noturno", "Produção Agropecuária- Manhã"  );
					
					foreach($listacurso as $curso){
						// reseta a variável/atributo
						$selecionado = "";
						
						if($curso == $client_info['curso'] ){
							$selecionado = "selected";
						}
						
						echo "<option value='{$curso}' $selecionado>{$curso}</option>";
					}
				?>
			</select>
			<br>
		</div> 





<!-- 		
		<div class="col-md-6">
	
		<label for="curso">Curso</label>
		
		<select  name="curso" class="form-control" > 
			<option value="" disabled="" selected>Selecione uma opção </option>
			<option value="Agronegócio- Noturno">Agronegócio- Noturno</option>
			<option value="Análise e Desenvolvimento de Sistemas- Manhã">Análise e Desenvolvimento de Sistemas- Manhã</option>
			<option value="Análise e Desenvolvimento de Sistemas- Noturno">Análise e Desenvolvimento de Sistemas- Noturno</option>
			<option value="Eventos- Noturno">Eventos- Noturno</option>
			<option value="Gestão Empresarial- Noturno">Gestão Empresarial- Noturno</option>
			<option value="Produção Agropecuária- Manhã">Produção Agropecuária- Manhã</option>
			
		</select >
    	</div> -->
		
		

		<div class="col-md-6">
			<br>
			<input type="hidden" name="id" value="<?=$client_info['id']?>">

			<?php endforeach; ?>

			<button class="btn btn-warning btn-lg">
				
				Salvar Alteração <i class="fa fa-user-edit"></i>

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
		$("#phone").mask("(00) 0000-0000");
	});
</script>