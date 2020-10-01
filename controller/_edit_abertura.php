<?php
include '../conexao/conexao.php';


$id= $_POST['id'];

$valor = $_POST['valor'];


 $sql = "UPDATE `abertura` SET `valor`= '$valor' WHERE id = $id";


$atualizar= mysqli_query($conexao, $sql);


	 header("Location: ../view/lista_abertura.php?abertura_delete_success");


?>