<?php

// Faça um algoritmo que peça dois números e imprima o maior deles.

print "Digite um número: ";
$n1 = (int) fgets (STDIN);

print "Digite outro número: ";
$n2 = (int) fgets (STDIN);

if ($n1 > $n2){
    print "O maior número é: $n1 \n";
}

if ($n1 < $n2){
    print "O maior número é: $n2 \n";
}
