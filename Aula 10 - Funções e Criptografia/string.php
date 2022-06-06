<?php

$nome = "maciel";
$sobrenome = "FERREIRA";

$nome2 = "maciel ferreira";

echo "Nome: " . ucfirst($nome) . PHP_EOL;
echo "Sobrenome: " . ucfirst(strtolower($nome)) . PHP_EOL;
echo "Sobrenome: " . ucwords($nome2) . PHP_EOL;