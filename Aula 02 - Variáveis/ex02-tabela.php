<h1>Tabela de informações</h1>

<?php

$nome   = "Maciel";
$idade  = 26;
$cidade = "Gama";

$nome2   = "Rodrigo";
$idade2  = 33;
$cidade2 = "Brasília";

$nome3   = "Joana";
$idade3  = 50;
$cidade3 = "Arceburgo";

echo "<table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cidade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{$nome}</td>
            <td>{$idade}</td>
            <td>{$cidade}</td>
          </tr>
          <tr>
            <td>{$nome2}</td>
            <td>{$idade2}</td>
            <td>{$cidade2}</td>
          </tr>
          <tr>
            <td>{$nome3}</td>
            <td>{$idade3}</td>
            <td>{$cidade3}</td>
          </tr>
        </tbody>
      </table>
";
?>

<style>
  table, thead, tbody, tr, td{
    border: solid 1px #000000;
    padding: 5px 10px;
    text-align: center;
  }
</style>

