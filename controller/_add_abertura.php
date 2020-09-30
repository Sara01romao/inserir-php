<?php
include '../conexao/conexao.php';

//recendo os valores dos atributos
$valor = $_POST['valor'];




//inserir os valores dos atribudos no tabela abertura
 $sql= "INSERT INTO `abertura` ( `valor`, `data`) VALUES ('$valor', now())";

$inserir= mysqli_query($conexao, $sql);


	  header("Location: ../view/lista_abertura.php?abertura_add_success");


?>

