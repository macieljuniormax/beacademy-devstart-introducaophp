<?php
// Variáveis
$tenhoEmprego = true; //bolean
$tenhoEmprego = false;

$numeroCasa    = 2006; //integer
$cpf           = '012.123.123-12'; //string
$saldoBancario = -2345.66; //float

$nome   = "Maciel";
$bebida = "Café";
$bebida = "Refrigerante";

echo "Meu nome é " . $nome . " e eu gosto de " . $bebida . PHP_EOL;
?>
</br>
<?php
// Constantes
define('CPF', '123.456.789-12');
const NOME_COMPLETO = 'Maciel Ferreira Custódio Júnior';

echo "Meu nome completo é " . NOME_COMPLETO;
?>
