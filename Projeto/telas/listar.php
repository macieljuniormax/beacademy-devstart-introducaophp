<h1>Listar Contatos</h1>

<table class="table tavle-hover table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($contatos as $contato) {
      $partes = explode(";", $contato);
      echo "<tr>";
        echo "<td>" . $partes[0] ."</td>";
        echo "<td>" . $partes[1] ."</td>";
        echo "<td>" . $partes[2] ."</td>";
      echo "</tr>";
    }?>
  </tbody>
</table>