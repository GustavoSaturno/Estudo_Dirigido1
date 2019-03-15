<?php

    $metros;
    $milimetros;

    print "Quantos metro? \n \n";
    $metros = (int)fgets (STDIN);

    $milimetros = $metros*1000;
    
    print "$metros metros é igual a $milimetros milímetros \n \n";