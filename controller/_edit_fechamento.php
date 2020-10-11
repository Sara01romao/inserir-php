<?php
include '../conexao/conexao.php';


 $id= $_POST['id'];

 $valor = $_POST['valor'];
 $data = $_POST['data'];




 $sql = "UPDATE `fechamento` SET `valor`= '$valor', `data`= now()  WHERE id = $id";


 $atualizar= mysqli_query($conexao, $sql);


 	 header("Location: ../view/lista_fechamento.php?fechamento_edit_success");


?>