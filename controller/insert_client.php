<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;

if(isset($data) && !empty($data)) {
	$manager->insertClient("cliente", $data);
	
	header("Location: ../view/cliente.php?client_add_success");
}

?>