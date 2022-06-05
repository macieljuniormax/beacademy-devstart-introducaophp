<form action="" method="POST">
  <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" placeholder="Digite seu nome...">
  <button>Enviar</button>
</form>

<?php
  if ($_POST) {
    echo $_POST['nome'];
  }
?>