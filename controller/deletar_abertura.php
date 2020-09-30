<?php
include '../conexao/conexao.php';


$id = $_GET['id'];

$sql = "DELETE FROM `abertura` WHERE id = $id";

$deletar= mysqli_query($conexao, $sql);


header("Location: ../view/lista_abertura.php?abertura_delete_success");

?>