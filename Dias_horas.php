<?php
    $dias;
    $horas;
    $minutos;
    $segundos;
    $tempo_total;


    print "Por quantos dias você foi um usuário? \n \n";
    $dias = (int) fgets (STDIN);

    print "Por quantas horas você foi um usuário? \n \n";
    $horas = (int) fgets (STDIN);

    print "Por quantos minutos você foi um usuário? \n \n";
    $minutos = (int) fgets (STDIN);

    print "Por quantos segundos você foi um usuário? \n \n";
    $segundos = (int) fgets (STDIN);

    $tempo_total = ($dias*24) + $horas;
    $tempo_total = ($tempo_total*60) + $minutos;
    $tempo_total = ($tempo_total*60) + $segundos;

    print "Você foi um usuario por $tempo_total segundos \n \n";
