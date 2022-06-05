<?php

  function soma(float $numero1, float $numero2): float
  {
    return $numero1 + $numero2;
  }

  function welcome(string $nome): string
  {
    return "BEM-VINDO(A) {$nome}" . PHP_EOL;
  }

  echo soma(10, 20) . PHP_EOL;
  echo "-------------" . PHP_EOL;
  echo soma(10, 90) . PHP_EOL;
  // echo soma("Maciel" + 20);
  echo welcome("Maciel");

?>