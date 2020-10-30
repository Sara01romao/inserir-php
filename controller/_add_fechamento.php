<?php
include '../conexao/conexao.php';

//recendo os valores dos atributos
$valor = $_POST['valor'];

$valor_corrigido = str_replace(",",".",$valor); //formata valor float para ir para o banco




//inserir os valores dos atribudos no tabela fachamento
 $sql= "INSERT INTO `fechamento` ( `valor`, `data`) VALUES ('$valor_corrigido', now())";

$inserir= mysqli_query($conexao, $sql);


	  header("Location: ../view/lista_fechamento.php?fechamento_add_success");


?>

