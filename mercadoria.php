<?php
    $preco_mercadoria;
    $desconto_percentual;
    $desconto_reais;
    $preco_novo;

    print "Qual o preço do produto? \n \n";
    $preco_mercadoria = (int) fgets (STDIN);

     print "Qual o percentual de desconto \n \n";
     $desconto_percentual = (int) fgets (STDIN);

     $desconto_reais = ($preco_mercadoria/100)*$desconto_percentual;
     $preco_novo = $preco_mercadoria-$desconto_reais;

     print "$desconto_reais reias de desconto \n \n";
     print "$preco_novo reias é o novo preço";