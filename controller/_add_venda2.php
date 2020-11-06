<?php

include '../conexao/conexao.php';


$id_servico= $_POST['servico'];
$quantidade= $_POST['quantidade'];


$sql= "INSERT INTO `itens_venda`(`id_servico`, `quantidade` ) VALUES ('$id_servico', '$quantidade')";
 $inserir= mysqli_query($conexao, $sql);



 $item_id = mysqli_insert_id($conexao);//pega  id criado anteriormente da venda
 $cliente_id = $_POST['idCliente'];
 $quantidade= $_POST['quantidade'];
 $id_servico= $_POST['servico'];
 
 $sql= "INSERT INTO `venda`( `data`, `cliente_id`, `quantidade`, `item_id`, `id_servico`) VALUES (now(), '$cliente_id' , '$quantidade', '$item_id', '$id_servico')";

 $inserir= mysqli_query($conexao, $sql);
  if($sql == ''){
     echo "<script language='javascript'>
           window.alert('Ocorreu um erro ao cadastrar Venda!');
           </script>";
 }

 header("Location: ../view/lista_venda2.php?venda_add_success");
 //-----------------------------------------------------------------------------------------------------------

//  $cliente_id = $_POST['idCliente'];
//  $quantidade= $_POST['quantidade'];
 
//  $sql= "INSERT INTO `venda`( `data`, `cliente_id`, `quantidade`) VALUES (now(), '$cliente_id' , '$quantidade')";

//  $inserir= mysqli_query($conexao, $sql);
//   if($sql == ''){
//      echo "<script language='javascript'>
//            window.alert('Ocorreu um erro ao cadastrar Venda!');
//            </script>";
//  }

// $id_venda = mysqli_insert_id($conexao);//pega  id criado anteriormente da venda

//  $id_servico= $_POST['servico'];

//  $quantidade= $_POST['quantidade'];


// //   "SELECT i.quantidade, s.preco, i.quantidade*s.preco as total
// //  from itens_venda i
// //  INNER JOIN servico s on (i.id_servico= s.id)";


//  $sql= "INSERT INTO `itens_venda`( `id_venda`,`id_servico`, `quantidade` ) VALUES ('$id_venda', '$id_servico', '$quantidade')";
//  $inserir= mysqli_query($conexao, $sql);

 //printf("Last inserted record has id %d\n", mysql_insert_id());

 ?>