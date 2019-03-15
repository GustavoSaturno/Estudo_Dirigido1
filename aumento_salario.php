<?php
    $salario;
    $novo_salario;
    $porcentagem_aumento;
    $porcentagem_salario;

    print "Qual o seu salario atual? \n \n";
    $salario = (int) fgets (STDIN);
    
    print "Quanto você pretende aumentar seu salario em quantos %? \n \n";
    $porcentagem_aumento = (int) fgets (STDIN);

    $porcentagem_salario = ($salario*$porcentagem_aumento)/100;
    $novo_salario = $porcentagem_salario+$salario;

    print "Seu novo salario é de R$$novo_salario\n \n";
