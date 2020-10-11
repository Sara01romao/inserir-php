<?php
include '../conexao/conexao.php';


$id = $_GET['id'];

$sql = "DELETE FROM `fechamento` WHERE id = $id";

$deletar= mysqli_query($conexao, $sql);


header("Location: ../view/lista_fechamento.php?fechamento_delete_success");

?>