<?php

//Faça um algoritmo que leia três números e mostre o maior deles.

    print "Digite um número: ";
    $n1 = (int) fgets (STDIN);

    print "Digite outro número: ";
    $n2 = (int) fgets (STDIN);

    print "Digite mais um número: ";
    $n3 = (int) fgets (STDIN);

        if (($n1 > $n2) and ($n1>$n3)){
            print "O maior número é: $n1 \n";
        }

        elseif (($n1<$n2) and ($n2>$n3)){
            print "O maior número é: $n2 \n";
         }

        else{
            print "O maior número é: $n3 \n";
        }
