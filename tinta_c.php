<?php
    $area;
    $area_i;
    $litro;
    $lata3_6L;
    $lata18L;
    $quantidade;
    $preco;

    $litro = 6;
    $lata3_6L = $litro*3.6;
    $lata18L = $litro*18;

    print "Quantos metros quadrados você deseja pintar? \n \n";
    $area_inicial = $area = (int) fgets (STDIN);
    
    $area_inicial = $area + $area*0.10;
    $area = $area + $area*0.10;
    $quantidade3_6L = 0;
    $quantidade18 = 0;

    while($area > 86.4 ){
        print "Repetiu \n";
        $area = $area - $lata18L;
        $quantidade18 = $quantidade18+1;
    }


    while($area > 0 ){
        $area = $area - $lata3_6L;
        $quantidade3_6 = $quantidade+1;
    } 

        $quantidade_final = $quantidade3_6L + $quantidade18;    
        $preco = $quantidade3_6L*25;
        $preco2 = $quantidade18*80;
        $preco_final= $preco + $preco2;
        print "Para cobrir $area_inicial metros quadrados você gastara $quantidade18 latas e $quantidade3_6L galões o preço será R$$preco_final \n \n";
    
