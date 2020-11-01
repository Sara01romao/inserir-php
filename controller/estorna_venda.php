<?php
include '../conexao/conexao.php';

echo $id = $_GET['id'];



    $sql = "DELETE FROM `itens_venda`   WHERE id = $id";

    $deletar= mysqli_query($conexao, $sql);




    header("Location: ../view/lista_venda.php?client_delete_success");

?>