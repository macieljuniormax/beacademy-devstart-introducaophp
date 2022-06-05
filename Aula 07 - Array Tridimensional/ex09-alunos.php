<?php

$aluno1 = [
  "nome" => "Maria",
  "email" => "maria@gmail.com",
  "telefone" => "(12) 9 12345678",
  "notas" => [9, 10, 8, 6]
];

$aluno2 = [
  "nome" => "Carlos",
  "email" => "carlos@gmail.com",
  "telefone" => "(12) 9 12345679",
  "notas" => [7, 4, 8, 8]
];

$aluno3 = [
  "nome" => "Zezim",
  "email" => "zezim@gmail.com",
  "telefone" => "(12) 9 12345610",
  "notas" => [7, 3, 6, 8]
];

$aluno4 = [
  "nome" => "Antônio",
  "email" => "antonio@gmail.com",
  "telefone" => "(12) 9 12345611",
  "notas" => [1, 4, 3, 8]
];

$alunos = [
  $aluno1,
  $aluno2,
  $aluno3,
  $aluno4
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
      crossorigin="anonymous">
<div class="container">
  <h1 class="mt-5">Alunos</h1>
  <hr>
  <table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($alunos as $aluno) {
          echo "<tr>";
            echo "<td>{$aluno['nome']}</td>";
            echo "<td>{$aluno['email']}</td>";
            echo "<td>{$aluno['telefone']}</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>




