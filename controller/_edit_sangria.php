<?php
include '../conexao/conexao.php';


 $id= $_POST['id'];

 $valor = $_POST['valor'];
 $data = $_POST['dh'];




 $sql = "UPDATE `sangria` SET `valor`= '$valor', `dh`= now()  WHERE id = $id";


 $atualizar= mysqli_query($conexao, $sql);


 	 header("Location: ../view/lista_sangria.php?sangria_edit_success");


?>