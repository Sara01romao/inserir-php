<?php
include '../conexao/conexao.php';
    $buscar =  $_POST['pesquisa'];

    $query = mysqli_query($conexao, "SELECT * FROM cliente WHERE nome LIKE '%$buscar%'");
    $num   = mysqli_num_rows($query);
    if($num >0){
        while($row = mysqli_fetch_assoc($query)){
          echo $row['nome'].' - '.$row['id'].' - '.$row['tipo'].'<br/><hr>';
        }
    }else{
      echo "Esta Pessoa Não Existe!";
    }

  ?>