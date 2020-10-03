<?php
include '../conexao/conexao.php';


echo $id= $_POST['id'];

echo $valor = $_POST['valor'];
echo $data = $_POST['data'];




 $sql = "UPDATE `abertura` SET `valor`= '$valor', `data`= now()  WHERE id = $id";


 $atualizar= mysqli_query($conexao, $sql);


 	 header("Location: ../view/lista_abertura.php?abertura_edit_success");


?>