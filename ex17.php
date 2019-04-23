<?php

//Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado
//ao segundo número. Não utilize a função de potência da linguagem.

print "Digite o número da base: ";
$base=(int) fgets(STDIN);

print "Digite o o número do expoente: ";
$expoente=(int) fgets(STDIN);

$potencia = 1;
$vbase = $base;

for ($i=1; $i<=$expoente; $i++){ 
    $potencia=$potencia*$vbase;
}

print "Resultado = $potencia\n";
