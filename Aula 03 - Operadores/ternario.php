<?php
$idade = 21;

echo $idade >= 18 ? "Maior de idade" : "Menor de idade";
echo "<br>";
echo isset($nome) ? $nome : "Nome não definido";
echo "<br>";

$nome = "Maciel";
echo $nome ?? "Nome não definido"
; ?>