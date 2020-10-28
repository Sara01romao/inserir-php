<?php

include_once 'dependencias.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style= "background: #ffccbc;  font-weight: bold; ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Logo <i class="fa fa-print"></i> </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Caixa
        </a>
        <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view/lista_abertura.php">Abertura</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="view/lista_sangria.php">Sangria</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="view/lista_fechamento.php">Fechamento</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista_venda">Venda</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cliente
        </a>
        <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lista_cliente.php">Lista Cliente</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastrar_cliente.php">Adicionar Cliente</a>
          
        </div>
      </li>
     
   
  </div>
  
</nav>
</body>
</html>