<?php

$bandas = [
  ["Dream Theater", 3],
  ["Neo Pi Neo", 6],
  ["Exaltasamba", 3],
  ["Dream Theater", 5],
];

?>

<table>
  <thead>
    <tr>
      <th>Banda</th>
      <th>Quantidade de músicas que conheço</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($bandas as $banda) {
        echo "<tr>";
          foreach ($banda as $info) {
            echo "<td>{$info}</td>";
          }
        echo "<tr>";
      }
    ?>
  </tbody>
</table>

<style>
  table, tbody, thead, tr, th, td{
    border: solid 1px #000000;
    border-radius: 2px;
    text-align: center;
    padding: 5px 10px;
  }
</style>