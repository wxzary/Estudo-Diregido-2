<?php

//Faça um algoritmo para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
//A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
//A mensagem "Reprovado", se a média for menor do que sete;
//A mensagem "Aprovado com Distinção", se a média for igual a dez. 

print "Digite sua primeira nota: ";
$n1 = (int) fgets(STDIN);

print "Digite sua segunda nota: ";
$n2 = (int) fgets(STDIN);

$media = ($n1+$n2)/2;

    print "N1 / $n1\n";
    print "N2 / $n2\n";
    print "Média / $media \n\n";

if ($media == 10){
    print "Aprovado com Distinção \n\n";
}

elseif ($media >= 7){
    print "Aprovado \n\n";
}

else{
    print "Reprovado \n\n";
}
