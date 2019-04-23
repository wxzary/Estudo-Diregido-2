<?php

//Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas,dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre
//outros. Exemplo:
//326 = 3 centenas, 2 dezenas e 6 unidades
//12 = 1 dezena e 2 unidades

print "Digite um número entre 0-1000: ";
$n=(int)fgets(STDIN);

$qtn=$n;

if ($qtn=3){
    $centenas=(int)($n/100)%100;
    $dezenas=(int)($n/10)%10;
    $unidades=(int)($n%100)%10;

    print "No número $n, existem: \n
    $centenas centenas
    $dezenas dezenas
    $unidades unidades\n ";
}
