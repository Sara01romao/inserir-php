<?php  

include_once '../model/Conexao.class.php';
include_once '../model/abertura.class.php';

$manager = new Manager();

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'dependencias.php'; ?>
	
</head>
<body>

<div class="container">
	
	<h2 class="text-center">
		Lista de Aberturas <i class="fa fa-list"></i>
	</h2>

	<h5 class="text-right">
		<a href="page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>valor</th>
					
					<th>data</th>
					
					
					<th colspan="4">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listClient("abertura") as $abertura): ?>
				<tr>
					<td><?php echo $abertura['id']; ?></td>
					<td><?php echo $abertura['valor']; ?></td>
					<td><?php echo $abertura['data']; ?></td>
					

					
					
					<td>
						<form method="POST" action="page_update.php">
							
							<input type="hidden" name="id" value="<?=$abertura['id']?>">

							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
					</td>
					<td>
						<form method="POST" action="../controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$abertura['id']?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>

						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>

</body>
</html>