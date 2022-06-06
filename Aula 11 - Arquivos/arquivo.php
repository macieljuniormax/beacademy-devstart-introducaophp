<?php

$arquivo = fopen("produtos.csv", "a+");

fwrite($arquivo, "Maciel" . PHP_EOL);
fwrite($arquivo, "Rodrigo" . PHP_EOL);
fwrite($arquivo, "Luiza" . PHP_EOL);

fclose($arquivo);