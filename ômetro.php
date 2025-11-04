<?php

    $quantidadeAdultos = readline("Digite quantos adultos iram na festa: ");
    $quantidadeCriancas = readline("Digite quantas crianças iram na festa: ");

    $quantidadePedaços = ($quantidadeAdultos * 3) + ($quantidadeCriancas * 2);

    $pizzasNecessarias = ceil($quantidadePedaços / 8);

    print("Serão necessárias " . $pizzasNecessarias . " pizzas para a festa.");
?>
