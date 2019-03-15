<?php
    $cel;
    $F;

    print "Qual a temperatura em graus celcius? \n \n";
    $cel = (int) fgets (STDIN);

    $F = (9*$cel)/5 + 32;

    print "A temperatura em fahrenheit é $F \n \n";
    