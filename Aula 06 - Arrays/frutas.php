<?php

$frutas = ["Laranja",       //0
           "Abacaxi",       //1
           "Banana"];       //2

$frutas[] = "Maça";         //3
$frutas[10] = "Melancia";   //10
$frutas[] = "Tangerina";    //11
?>

<ul>
  <li><?php echo $frutas[0]; ?></li>
  <li><?php echo $frutas[1]; ?></li>
  <li><?php echo $frutas[2]; ?></li>
  <li><?php echo $frutas[3]; ?></li>
  <li><?php echo $frutas[10]; ?></li>
  <li><?php echo $frutas[11]; ?></li>
</ul>