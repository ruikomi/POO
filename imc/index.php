<?php

    // carregamento das classes
    // Pessoa vem antes pq Imc depende dela, então carrego primeiro
    include 'classes/Pessoa.php';
    include 'classes/Imc.php';

    // instanciamento dos objetos
    $pessoa = new Pessoa(48, 1.68);
    $imc = new Imc($pessoa);
    
    // var_dump($pessoa);
    // var_dump($imc);

    // execução do cálculo
    echo $imc->calcular();

