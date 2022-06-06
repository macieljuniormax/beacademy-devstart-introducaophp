<?php

$senha = "1234546";
$code = "MTIzNDU0Ng==";

echo base64_encode($senha) . PHP_EOL;
echo base64_decode($code) . PHP_EOL;