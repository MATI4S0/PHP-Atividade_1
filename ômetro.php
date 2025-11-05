<?php

    print "Olá bem vindo ao pizzaômetro!\n\n";
    
    $quantidadeAdultos = readline("Digite quantos adultos iram na festa: ");
    $quantidadeCriancas = readline("Digite quantas crianças iram na festa: ");

    $quantidadePedaços = ($quantidadeAdultos * 3) + ($quantidadeCriancas * 2);

    $pizzasNecessarias = ceil($quantidadePedaços / 8);

    if ($pizzasNecessarias == 1) {
        print("\nSerá necessário comprar " . $pizzasNecessarias . " pizza para a festa.\n");
    }else {
        print("\nSerá necessário comprar " . $pizzasNecessarias . " pizzas para a festa.\n");
    }
