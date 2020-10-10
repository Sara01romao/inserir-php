<?php
include '../conexao/conexao.php';

//recendo os valores dos atributos
$valor = $_POST['valor'];




//inserir os valores dos atribudos no tabela fachamento
 $sql= "INSERT INTO `fechamento` ( `valor`, `data`) VALUES ('$valor', now())";

$inserir= mysqli_query($conexao, $sql);


	  header("Location: ../view/lista_fechamento.php?fachamento_add_success");


?>

