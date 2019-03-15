<?php
    $area;
    $area_i;
    $litro;
    $lata3_6L;
    $quantidade;
    $preco;

    $litro = 6;
    $lata3_6L = $litro*3.6;

    print "Quantos metros quadrados você deseja pintar? \n \n";
    $area_inicial = $area = (int) fgets (STDIN);

    $quantidade = 0;


    while($area > 0){
        print "Repetiu \n";
        $area = $area - $lata3_6L;
        $quantidade = $quantidade+1;
    }


    // if ($area > 0) {
    //         $area - $lata3_6L;
    //         $quantidade = $quantidade+1;
    // } 
    
    
        $preco = $quantidade*25;
        print "Para cobrir $area_inicial metros quadrados você gastara $quantidade latas e R$$preco \n \n";
    

    