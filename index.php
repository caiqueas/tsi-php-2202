<?php
//$nome = 'Caique';
//echo "Olá $nome";

#echo 'Olá mundo!';
//Comentário de linha
#Comentário de linha
/*
Comentário
de
bloco
*/

//DOCUMENTAÇÃO DO PHP FICA EM: https://www.php.net

/*
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo "Caique <br>";
    $i++;
}
*/

/*
$i = 1;
while ($i <= 10) {
    echo "Caique <br>";
    $i++;  
}
*/

/*
$i = 0;
do {
    echo "Caique <br>";
    $i++;
} while ($i < 10);
*/

/*
if (5 > 10){
    echo "5 é maior que 10";
}
else{
    echo "5 não é maior que 10";
}
*/

$i = '2';

switch ($i) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
}
