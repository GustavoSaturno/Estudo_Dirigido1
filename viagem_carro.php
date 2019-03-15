<?php
    $tempo_viagem;
    $distancia;
    $velocidade;

    print "Qual a distancia a ser percorrida em km? \n \n";
    $distancia = (int) fgets (STDIN);

    print "Qual a velocidade média em km/h? \n \n";
    $velocidade = (int) fgets (STDIN);

    $tempo_viagem = $distancia/$velocidade;

    print "Você ira levar aproximadamente $tempo_viagem horas para chegar ao seu destino";

