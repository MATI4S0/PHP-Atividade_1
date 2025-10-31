<?php

    $valorCorreto = random_int(1, 10);

    $pontos = 10;

    $vidas = 3;

    print("Você possui: $vidas vidas\n\n");

    do{
      
        $chute = (int) readline("Digite um valor: ");

        if($chute == $valorCorreto)
        {
            print("\nVocê acertou o valor!!\n");
            $pontos = $pontos + 15;

        }elseif ($chute > $valorCorreto)
        {
            print("Você chutou um numero mais alto que o valor correto\n\n");
            $vidas = $vidas - 1;
            print("Você possui: $vidas vidas\n");
            $pontos = $pontos - 3;
        }else{
            print("Você chutou um numero mais baixo que o valor correto\n\n");
            $vidas = $vidas - 1;
            $pontos = $pontos - 3;
            print("Você possui: $vidas vidas\n\n");
        }

        if($vidas == 0){
            print("Você morreu!!");
        }
    }while ($chute != $valorCorreto && $vidas != 0);

    print("\nTotal de pontos: $pontos");

