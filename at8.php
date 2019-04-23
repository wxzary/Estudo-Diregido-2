<?php

    //Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato

    
    print "Informe o valor do primeiro produto: ";
    $p1 = fgets (STDIN);

    print "Informe o valor do segundo produto: ";
    $p2 = fgets (STDIN);

    print "Informe o valor do terceiro produto: ";
    $p3 = fgets (STDIN);

    if (($p1<$p2) and ($p1<$p3)){
        print "O produto com menor o preço é o primeiro produto: R$$p1 \n";
    }

    elseif (($p2 < $p1) and ($p2<$p3)){
        print "O produto com menor preço é o segundo produto: R$$p2 \n";
    }

    else{
        print "O produto com menor preço é o terceiro produto: R$$p3 \n";
    }
