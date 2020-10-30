<?php
include '../conexao/conexao.php';

//recendo os valores dos atributos
$valor = $_POST['valor'];

$valor_corrigido = str_replace(",",".",$valor); //formata valor float para ir para o banco



//inserir os valores dos atribudos no tabela abertura
 $sql= "INSERT INTO `abertura` ( `valor`, `data`) VALUES ('$valor_corrigido', now())";

$inserir= mysqli_query($conexao, $sql);


	  header("Location: ../view/lista_abertura.php?abertura_add_success");


?>

