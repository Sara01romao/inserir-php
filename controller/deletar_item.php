<?php
include '../conexao/conexao.php';

 $id = $_GET['id'];



     $sql = "DELETE FROM `itens_venda`   WHERE id = $id";
    //  $sql = "DELETE FROM `itens_venda`  WHERE id_venda = $id";
     $deletar= mysqli_query($conexao, $sql);

    


     header("Location: ../view/lista_itens.php?client_delete_success");

?>