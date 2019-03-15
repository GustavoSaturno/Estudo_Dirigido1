<?php
    $cigarros_fumados;
    $anos_fumados;
    $dias_perdidos;

    print "Quantos cigarros você fuma por dia? \n \n";
    $cigarros_fumados = (int) fgets (STDIN);

    print "A quantos anos você fuma? \n \n";
    $anos_fumados =  (int) fgets (STDIN);

    $dias_perdidos = $cigarros_fumados*$anos_fumados*365;
    $dias_perdidos = $dias_perdidos*10;
    $dias_perdidos = round($dias_perdidos/1440);

    print "Você perdeu $dias_perdidos dias de vida! \n \n";