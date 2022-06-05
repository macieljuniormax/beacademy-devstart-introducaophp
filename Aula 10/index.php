<?php
$notasCursoA = [10, 9, 9.5];
$notasCursoB = [9.4, 8, 5, 6];

function mediaDeNotas(array $notas): float
{
  // $total = 0;
  // $quantidade = 0;
  // foreach ($notas as $nota) {
  //   $total += $nota;
  //   $quantidade ++;
  // }

  return array_sum($notas) / count($notas);
}
echo mediaDeNotas($notasCursoA) . PHP_EOL;
echo mediaDeNotas($notasCursoB) . PHP_EOL;
