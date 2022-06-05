<form action="" method="post">
  <input type="number" name="numero01" placeholder="Número 1">
  <input type="number" name="numero02" placeholder="Número 2">
  <br>
  <button name="soma">Somar</button>
  <button name="subtracao">Subtrair</button>
  <button name="multiplicacao">Multiplicação</button>
  <button name="divisao">Dividir</button>
</form>

<?php
if ($_POST) {
  if (isset($_POST['soma'])) {
    echo $_POST['numero01'] + $_POST['numero02'];
  }

  if (isset($_POST['subtracao'])) {
    echo $_POST['numero01'] - $_POST['numero02'];
  }

  if (isset($_POST['multiplicacao'])) {
    echo $_POST['numero01'] * $_POST['numero02'];
  }

  if (isset($_POST['divisao'])) {
    echo $_POST['numero01'] / $_POST['numero02'];
  }
}
?>
