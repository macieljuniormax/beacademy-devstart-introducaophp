<?php

declare(strict_types = 1);

function mostrarNomes(array $nomes): void
{
  foreach ($nomes as $nome) {
    echo "Nome: {$nome}" . PHP_EOL;
  }
}

mostrarNomes(["Maciel", "Ferreira", "Custódio", "Júnior"]);