
<?php
// para inicializar a sessão
session_start();

?>

<?php
include 'includes/header.php';

?>


<h1>Cadastrar Cliente</h1>

<?php
if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}


?>

<form method="POST" action="processa.php">


<div class="row" style="margin=50px">
    <form class="col s12">
      <div class="row">

      <div class="row">
        <div class="input-field col s12">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digitar nome completo"><br><br>
        </div>
      </div>

        <div class="input-field col s6">
        <label>RG:</label>
        <input type="text" name="rg" placeholder="000.000.000-0"><br><br>

        </div>
        <div class="input-field col s6">
        <label>CPF:</label>
        <input type="text" name="cpf" placeholder="000.000.000- 0"><br><br>

        </div>
      </div>
    </div>
 

      <input type="submit" value="Cadastrar">
    </form>

</div>








<?php
include_once 'includes/footer.php';

?>