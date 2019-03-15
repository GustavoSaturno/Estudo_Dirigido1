<?php
    $area;
    $area_i;
    $litro;
    $lata18L;
    $quantidade;
    $preco;

    $litro = 6;
    $lata18L = $litro*18;

    print "Quantos metros quadrados você deseja pintar? \n \n";
    $area_inicial = $area = (int) fgets (STDIN);

    $quantidade = 0;


    while($area > 0){
        $area = $area - $lata18L;
        $quantidade = $quantidade+1;
    }


    // if ($area > 0) {
    //         $area - $lata18L;
    //         $quantidade = $quantidade+1;
    // } 
    
    
        $preco = $quantidade*80;
        print "Para cobrir $area_inicial metros quadrados você gastara $quantidade latas e R$$preco \n \n";
