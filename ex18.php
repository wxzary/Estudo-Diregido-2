<?php

//Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a
//quantidade de números impares.

$npar=0;
$nimpar=0;
$vezes=1;

do {print "Digite um número: ";
    $n = (float) fgets(STDIN);
    
    if ($n%2==0)
    {$npar++;}
    if ($n%2!=0)
    {$nimpar++;} 
    $vezes++;}  
    
    while($vezes<=10);

    
print "Quantidade de números ímpares: $nimpar\nQuantidade de números pares: $npar \n";
