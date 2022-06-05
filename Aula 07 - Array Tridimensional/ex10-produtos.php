<?php

$produto1 = [
  "nome" => "Marvel's Spider-Man: Miles Morales",
  "preco" => "R$200,00",
  "descricao" => "Viva a experiência da ascensão de Miles Morales como o 
                  herói que domina novos poderes, incríveis e explosivos, 
                  para se tornar um Homem-Aranha todo especial.",
  "imagem" => "<img width='150px' src=images/imagem-spider-man.webp>"
];
$produto2 = [
  "nome" => "Ratchet & Clank™: Em Uma Outra Dimensão",
  "preco" => "R$199,50",
  "descricao" => "Abra caminho em uma aventura interdimensional com 
                  Ratchet e Clank. Pule de dimensão em dimensão para enfrentar 
                  um imperador maligno de outra realidade.",
  "imagem" => "<img width='150px' src=images/imagem-ratchet-and-clank.webp>"
];
$produto3 = [
  "nome" => "UNCHARTED™: Legacy of Thieves Collection",
  "preco" => "R$230,00",
  "descricao" => "Jogue na pele de Nathan e Chloe Frazer em aventuras 
                  separadas e acompanhe como eles são obrigados a confrontar o passado 
                  e forjar os próprios legados.",
  "imagem" => "<img width='150px' src=images/imagem-uncharted.webp>"
];
$produto4 = [
  "nome" => "Ghost of Tsushima™ Director's Cut",
  "preco" => "R$180,00",
  "descricao" => "Forje um novo caminho e trave uma guerra atípica pela 
                  liberdade de Tsushima nesta versão expandida da aventura de ação em mundo 
                  aberto da Sucker Punch Productions.",
  "imagem" => "<img width='150px' src=images/imagem-ghost-of-tsushima.webp>"
];
$produto5 = [
  "nome" => "Death Stranding™ Director's Cut",
  "preco" => "R$210,00",
  "descricao" => "No papel de Sam Bridges, sua missão é dar esperança à humanidade 
                  conectando os últimos sobreviventes de uma América dizimada nesta
                  desafiadora experiência do lendário criador de jogos Hideo Kojima.",
  "imagem" => "<img width='150px' src=images/imagem-death-stranding.webp>"
];


$produtos = [
  $produto1,
  $produto2,
  $produto3,
  $produto4,
  $produto5
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
      crossorigin="anonymous">
<div class="container">
  <h1 class="mt-5">Lista de Jogos na Promoção</h1>
  <hr>
  <table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
      <tr>
        <th id="nome">Nome</th>
        <th id="preco">Preço</th>
        <th id="descricao">Descrição</th>
        <th id="foto">Foto</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($produtos as $produto) {
          echo "<tr>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>{$produto['preco']}</td>";
            echo "<td>{$produto['descricao']}</td>";
            echo "<td>{$produto['imagem']}</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<style>
  #foto{
    text-align: center;
  }

  th, td{
    vertical-align: middle;
    padding: 10px 20px !important;
  }

  td img{
    border-radius: 10px;
  }


</style>




