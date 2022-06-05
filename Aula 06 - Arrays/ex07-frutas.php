<?php

$frutas = ["Laranja",       //0
           "Abacaxi",       //1
           "Banana"];       //2
?>

<ul>
  <?php 
    for ($i=0; $i <= 2 ; $i++) { 
      echo "<li>{$frutas[$i]}</li>";
    }
  ?>
</ul>