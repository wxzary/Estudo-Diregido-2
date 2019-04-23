<?php

//Faça um programa que leia 5 números e informe a soma e a média dos números.

print "Digite o 1° número: ";
$n1=(int) fgets(STDIN);

print "Digite o 2° número: ";
$n2=(int) fgets(STDIN);

print "Digite o 3° número: ";
$n3=(int) fgets(STDIN);

print "Digite o 4° número: ";
$n4=(int) fgets(STDIN);

print "Digite o 5° número: ";
$n5=(int) fgets(STDIN);


$soma=$n1+$n2+$n3+$n4+$n5;

$media=$soma/5;

print "A soma dos números $n1, $n2, $n3, $n4 e $n5 é igual a $soma,\n";

print "e a média foi $media \n";
