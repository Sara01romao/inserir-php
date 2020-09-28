<?php
include '../conexao/conexao.php';


$id = $_GET['id'];

$sql = "DELETE FROM `cliente` WHERE id = $id";

$deletar= mysqli_query($conexao, $sql);


header("Location: ../view/lista_cliente.php?client_delete_success");

?>