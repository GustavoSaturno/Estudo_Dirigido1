<?php
    $dias_alugados;
    $km_percorridos;
    $preco;

    print "Por quantos dias o carro foi alugado? \n \n";
    $dias_alugados = (int) fgets (STDIN);

    print "Quantos km foram percorridos? \n \n";
    $km_percorridos = (int) fgets (STDIN);

    $preco = ($dias_alugados*60)+($km_percorridos*0.15);
    
     print "O preço total foi R$$preco \n \n";

