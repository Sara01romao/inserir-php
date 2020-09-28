<?php
include '../conexao/conexao.php';

//recendo os valores dos atributos
$nome = $_POST['nome'];

$cpf= $_POST['cpf'];

$tipo= $_POST['tipo'];

$rg= $_POST['rg'];

$curso= $_POST['curso'];


//inserir os valores dos atribudos no tabela cliente
 $sql= "INSERT INTO `cliente`( `nome`, `rg`, `cpf`, `tipo`, `curso`) VALUES ('$nome','$rg', '$cpf' ,'$tipo', '$curso')";

$inserir= mysqli_query($conexao, $sql);


	 header("Location: ../view/lista_cliente.php?client_add_success");


?>

?>