<?php

    //Faça um algoritmo que leia três números e mostre-os em ordem decrescente.

    print "Digite um número: ";
    $n1 = (int) fgets (STDIN);

    print "Digite outro número: ";
    $n2 = (int) fgets (STDIN);

    print "Digite mais um número: ";
    $n3 = (int) fgets (STDIN);

    print "Ordem decresente:\n";

    if (($n1 > $n2) and ($n1>$n3)){
        print "$n1 \n";
     }

     elseif (($n1<$n2) and ($n2>$n3)){
        print "$n2 \n";
    }

    else{
        print "$n3 \n";
    }


    if ((($n1<$n2) and ($n1>$n3)) or (($n1>$n2) and ($n1<$n3))){
        print "$n1 \n";
    }

    elseif ((($n2 > $n1) and ($n2<$n3))or(($n2 < $n1) and ($n2>$n3))){
        print "$n2 \n";
     }


    else{
        print "$n3 \n";
    }

    if (($n1<$n2) and ($n1<$n3)){
        print "$n1 \n";
    }

    elseif (($n2 < $n1) and ($n2<$n3)){
        print "$n2 \n";
    }

    else{
        print "$n3 \n";
    }
