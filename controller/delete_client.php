<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$manager->deleteClient("cliente", $id);

	header("Location: ../view/cliente.php?client_deleted");
}

?>