<?php
include '../conexao/conexao.php';


$id = $_GET['id'];

$sql = "DELETE FROM `sangria` WHERE id = $id";

$deletar= mysqli_query($conexao, $sql);


header("Location: ../view/lista_sangria.php?sangria_delete_success");

?>