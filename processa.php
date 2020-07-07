<?php

session_start(); //deve ser sempre um dos primeiros itens do codigo
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

//testtar que já tá recebendo os inputs
//  echo "Nome: $nome <br>";
//  echo "RG: $rg <br>";
//  echo "cpf: $cpf <br>";


//------------------------
//Inserir no bd

$result_usuario = "INSERT INTO clientes (nome, rg, cpf) VALUES ('$nome', '$rg', '$cpf')"; //função NOW(), SERVE PARA PEGAR HORA E DATA DE CRIAÇÃO
 $resultado_usuario = mysqli_query($conn, $result_usuario);


// // se foi add um id no banco , redirecionar para a pg do formulario
 if(mysqli_insert_id ($conn)){
     $_SESSION ['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso</p>"; //variavel globar para msg

    header("Location: index.php");

 }else{
     $_SESSION ['msg'] = "<p style='color: red;'>Usuário não foi cadastrado com sucesso</p>"; //variavel globar para msg

     header("Location: index.php");
}

?>
