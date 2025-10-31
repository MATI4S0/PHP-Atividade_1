<?php

    $valorCorreto = random_int(1, 10);

    do{
      
        $chute = (int) readline("Digite um valor: ");

        if($chute == $valorCorreto)
        {
            print("Você acertou o valor\n");
        }elseif ($chute > $valorCorreto)
        {
            print("Você chutou um numero mais alto que o valor correto\n");
        }else{
            print("Você chutou um numero mais baixo que o valor correto\n");
        }

    }while ($chute != $valorCorreto);

