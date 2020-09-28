<?php
include '../conexao/conexao.php';


$id= $_POST['id'];

$nome = $_POST['nome'];

$cpf= $_POST['cpf'];

$tipo= $_POST['tipo'];

$rg= $_POST['rg'];

$curso= $_POST['curso'];

 $sql = "UPDATE `cliente` SET `nome`= '$nome',`rg`= '$rg',`cpf`='$cpf',`tipo`='$tipo',`curso`='$curso' WHERE id = $id";


$atualizar= mysqli_query($conexao, $sql);


	 header("Location: ../view/lista_cliente.php?client_edit_success");


?>