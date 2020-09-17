<?php  

include_once '../model/Conexao.class.php';
include_once '../model/abertura.class.php';

$abertura = new Abertura();

$data = $_POST;

if(isset($data) && !empty($data)) {
	$abertura->insertAbertura("abertura", $data);
	
	header("Location: ../view/abertura.php?client_add_success");
}

?>